<?php
$connect = new PDO("mysql:host=localhost;dbname=biblioteca", "root", "");

// Recebe os parâmetros do POST, ou define como string vazia se não vierem
$titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : '';
$autor = isset($_POST["autor"]) ? $_POST["autor"] : '';
$ano_publicacao = isset($_POST["ano_publicacao"]) ? $_POST["ano_publicacao"] : '';

// Começa a montar a query base
$query = "SELECT * FROM livros WHERE 1=1";

// Adiciona os filtros conforme preenchidos
if (!empty($titulo)) {
    $query .= " AND titulo LIKE :titulo";
}
if (!empty($autor)) {
    $query .= " AND autor LIKE :autor";
}
if (!empty($ano_publicacao)) {
    $query .= " AND ano_publicacao = :ano_publicacao";
}

$query .= " ORDER BY titulo";

$statement = $connect->prepare($query);

// Bind dos parâmetros
if (!empty($titulo)) {
    $statement->bindValue(':titulo', "%$titulo%");
}
if (!empty($autor)) {
    $statement->bindValue(':autor', "%$autor%");
}
if (!empty($ano_publicacao)) {
    $statement->bindValue(':ano_publicacao', $ano_publicacao);
}

$statement->execute();
$result = $statement->fetchAll();
$rowCount = $statement->rowCount();

if ($rowCount > 0) {
    $data = '';
    foreach($result as $row) {
        $data .= '
        <div class="book-card bg-white rounded-lg shadow-md overflow-hidden transition duration-300">
            <div class="p-4">
                <h3 class="font-bold text-lg text-gray-800 mb-1">'.htmlspecialchars($row["titulo"]).'</h3>
                <p class="text-gray-600 text-sm mb-2">Autor: <span class="text-blue-600">'.htmlspecialchars($row["autor"]).'</span></p>
                <p class="text-gray-600 text-sm">Ano: <span class="font-medium">'.htmlspecialchars($row["ano_publicacao"]).'</span></p>
            </div>
        </div>';
    }
} else {
    $data = '';
}

echo $data;
?>

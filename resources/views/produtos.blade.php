<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <style>
        table,th,tr,td {
            border:1px solid #000;
        }
    </style>
    
    <table>
        <tr>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>preço</th>
        </tr>
        <php foreach ($product as $produto): ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
    </table>
</body>
</html>
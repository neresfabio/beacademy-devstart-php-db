<?php var_dump($data); ?>

<h1>Listar Categorias</h1>

<table class = "table table-hover table-striped">
    <thead class = "table-dark">
        <tr>
            <th>#id</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($category = $data->fetch(\PDO::FETCH_ASSOC))
            {
                echo '<tr>';
                    echo '<td>'.$category['id'].'</td>';
                    echo '<td>'.$category['name'].'</td>';
                    echo '<td>'.$category['description'].'</td>';
                echo '</tr>';
                var_dump($category);
            }
        ?>
    </tbody>
</table>
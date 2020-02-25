<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <p>Page: <?= $title; ?></p>
    <br/>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($users as $user):
                    echo "<tr><td>{$user['id']}</td><td>{$user['name']}</td><td>{$user['email']}</td></tr>";
                endforeach;
            ?>
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Honors Assessment 2</title>
    <link
        rel="stylesheet"
        href="/pico.min.css"
    />
</head>
<body>
<header class="container">
    <nav>
    <ul>
            <li><strong>Contact Management System</strong></li>
        </ul>
        <ul>
            <li><a href="/index.php">Display Contacts</a></li>
            <li><a href="/add.php">Add Contacts</a></li>
            <li><a href="/delete.php">Delete Contacts</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Contacts</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?=$row->id; ?></td>
            <td><?=$row->Name; ?></td>
            <td><?=$row->Email ?></td>
            <td><?=$row->Phone ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>
</body>
</html>
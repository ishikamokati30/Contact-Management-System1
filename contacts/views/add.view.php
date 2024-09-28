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
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Add Contacts</h1>
    <form method="post">
        <label>ID</label>
        <input type="number" name="id">
        <label>NAME</label>
        <input type="text" name="name">
        <label>EMAIL</label>
        <input type="text" name="email">
        <label>PHONE</label>
        <input type="number" name="phone">
        <input type="submit">
    </form>
</main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Dashboard</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.sidebar {
    height: 100%;
    width: 250px;
    background-color: #333;
    padding-top: 20px;
    position: fixed;
}

.sidebar h2 {
    color: #fff;
    text-align: center;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    padding: 15px;
    text-align: center;
}

.sidebar ul li a {
    color: #fff;
    text-decoration: none;
}

.sidebar ul li a:hover {
    background-color: #555;
}

.content {
    margin-left: 250px;
    padding: 20px;
}
</style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="sidebar">
        <h2>Management Dashboard</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Welcome, Management!</h2>
        <p>This is your Management dashboard. You can manage users, settings, and more.</p>
    </div>
</body>
</html>

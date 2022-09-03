
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- styles -->
    <link rel="stylesheet" href="/style/style.css">
    <!-- jquery -->
    <script src="/js/jquery-3.6.1.min.js"></script>
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/">Home</a></li>
                <li><a class="dropdown-item" href="upload">Upload new image</a></li>
                <li><a class="dropdown-item" href="galery">Galery</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">

<form class="form">
    <label class="label">Choose your file</label>
    <input class="file" type="file" name="file">
    <button class="btn1" type="submit" value="submit">Send file</button>
</div>

<script src="js/upload.js"></script>
</body>
</html>





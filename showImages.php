<?php

require 'config/db.php';

$sql = "SELECT * FROM `images`";

$query = mysqli_query($connect, $sql);
$query = mysqli_fetch_all($query);


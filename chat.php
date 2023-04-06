<?php

include "connect.php";

$sql = "INERST INTO text (message) VALUES ('hello')";
$conn->query($sql);

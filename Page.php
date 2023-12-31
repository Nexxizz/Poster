<?php

abstract class Page
{
    protected $db;
    protected function __construct() {
        $this->db = new MySQLi("localhost","public","","postershop");
        if (mysqli_connect_errno())
            throw new Exception(mysqli_connect_error());
        if (!$this->db->set_charset("utf8"))
            throw new Exception($this->db->error);
    }
    protected function __destruct() {
        $this->db->close();
    }
    protected function generatePageHeader($headline = "") {
        header("Content-type: text/html; charset=UTF-8");
        $headline = htmlspecialchars($headline);
        echo <<<EOT
<!DOCTYPE html>
<html lang="de" >
<head>
<meta charset="UTF-8" />
<title>$headline</title>
<link rel="stylesheet" type="text/css" href="PosterShop.css"/>
<script src=" PosterShop.js"></script>
</head>

EOT;
    }
    protected function generatePageFooter() {
        echo <<<EOT
</body>
</html>
EOT;
    }
    protected function processReceivedData() { }
}

<!doctype html>
<html lang="en">
<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/blogs/header.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/blogs/navigation.php');
?>
<body>
<div id="myDIV" class="header">
    <h2>Мой список дел</h2>
        <input type="text" id="myInput" placeholder="Название...">
        <span onclick="newElement()" class="addBtn">Добавить</span>
    </div>

        <ul id="myUL">
            <li>Прочитать книгу</li>
            <li>Организовать офис</li>
        </ul>


    <?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/blogs/footer.php');
    ?>


</body>
</html>
<?php
    require_once("config.php");
    $db_handle = new create();
    if(!empty($_POST["keyword"])) {
    $query ="SELECT * FROM info WHERE name like '" . $_POST["keyword"] . "%' ORDER BY name LIMIT 0,6";
    $result = $db_handle->runQuery($query);
    if(!empty($result)) {
?>
    <ul id="NameList">
<?php
    foreach($result as $name) {
?>
    <li onClick="selectName('<?php echo $name["name"]; ?>');"><?php echo $name["name"]; ?></li>
<?php } ?>
    </ul>
<?php } } ?>
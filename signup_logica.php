<?php
$link = mysqli_connect("localhost", "root", "", "chat_users");
if (!$link) {
die('Error de Conexión (' . mysqli_connect_errno() . ') '
. mysqli_connect_error());
}
$sql="INSERT INTO chat_users (`username`, `password`, `avatar`, `current_session`, `online`) VALUES
('$_POST[nombre]','$_POST[password]', 'user1.jpg', 0, 0)";
$result = mysqli_query($link, $sql); //ejecuto la consulta
if (!mysqli_error($link)) {
?>
<script>
alert("Se ingreso con total normalidad");
</script>
<?php
}else{
?>
<script>
alert ("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=signup.php">
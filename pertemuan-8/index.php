<form action="index.php" method="post">
    <table>
        <tr>
            <td>Pesan</td>
            <td><input type="text" name="pesan"></td>
            <td><input type="submit" value="Set"></td>
        </tr>
    </table>
</form>

<?php
session_start();
if(@$_POST["pesan"]) {
    $_SESSION["nama"] = "tamami";
    $_SESSION["msg"] = @$_POST["pesan"];
}
?>
<?php
include "koneksi.php";

if (isset($_POST['request'])){

    $request = $_POST['request'];
    $query = "SELECT * FROM mahasiswa WHERE prodi = '$request'";

$result = mysqli_query($connection, $query);
$i = 1;
?>

<table class="prodi">
    <thead>
        <tr>
        <th> No. </th>
            <th> NIM </th>
            <th> Nama </th>
            <th> Program Studi </th>
        </tr>
    </thead>

    <tbody>
    <?php while ($data = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td> <?= $i ?> </td>
        <td> <?= $data["nim"] ?> </td>
        <td> <?= $data["nama"] ?> </td>
        <td> <?= $data["prodi"] ?> </td>
    </tr>
    <?php $i++;?>
<?php endwhile ?>
    </tbody>

</table>
<?php }?>
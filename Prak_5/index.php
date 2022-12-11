<?php
include "koneksi.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Prodi :

        <select name="prodi" id="prodi">
            <option value="Teknik Informatika"> Teknik Informatika </option>
            <option value="Teknik Elektro"> Teknik Elektro </option>
            <option value="Teknik Mesin"> Teknik Mesin </option>
            <option value="Teknik Geofisika"> Teknik Geofisika </option>
            <option value="Teknik Geologi"> Teknik Geologi </option>
        </select>
    </h4>

    <table border="1" class="container">
        <tr>
            <th> No. </th>
            <th> NIM </th>
            <th> Nama </th>
            <th> Program Studi </th>
        </tr>
        <tbody >
            <?php
            $query = "SELECT * FROM mahasiswa";

            $result = mysqli_query($connection, $query);
            $i = 1;
            ?>
            <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td> <?= $i ?> </td>
                    <td> <?= $data["nim"] ?> </td>
                    <td> <?= $data["nama"] ?> </td>
                    <td> <?= $data["prodi"] ?> </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>

        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#prodi").on('change', function(){
                var value = $(this).val();
                
                $.ajax({
                type: "POST",
                url: "data.php",
                data: 'request=' + value,
                beforeSend:function(){
                    $(".container").html("<span>Working....</span>");
                },
                success: function(data) {
                    $('.container').html(data)
                }

            });
            });
            
        });
    </script>

</body>

</html>
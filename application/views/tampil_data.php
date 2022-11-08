<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/styles.css">
<body>
    <center><h1><b>Tampil Data</h1></center>
    <table style="margin:20px auto;" border="1" border-color="white";>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
    <?php
    $no =1;
    foreach($mahasiswa as $u) {
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->nim ?></td>
        <td><?php echo $u->nama ?></td>
        <td><?php echo $u->alamat ?></td>
        <td><?php echo $u->pekerjaan ?></td>
        <td><img src="<?php echo base_url();?><?php echo $u->foto ?>" width="50" height="50"></td>
        <td>
            <?php echo anchor('kampus/edit/'.$u->id, 'Edit'); ?>
            <?php echo anchor('kampus/hapus/'.$u->id, 'Hapus'); ?>
        </td>
    </tr>
    <?php } ?>
    </table>
    <center><?php echo anchor('kampus/tambah/','<input type=button value=\'Tambah Data\'>'); ?></center>
</body>
</html>
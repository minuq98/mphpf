<h2>Data Dosen</h2>
<a href="<?php echo $this->homeAddress('/add-new-dosen'); ?>">Tambah Dosen Baru</a>
<br/>
<br/>
<table class="data-table">
    <thead class="data-table-th">
        <td class="data-table-td">NIP</td>
        <td class="data-table-td">Nama</td>
        <td class="data-table-td">Alamat</td>
        <td class="data-table-td">Prodi</td>
        <td class="data-table-td">Jurusan</td>
        <td class="data-table-td">No. Telepon</td>
    </thead>
    <tbody>
    <?php
//  $arr = get_defined_functions();

//  print_r($arr);
    foreach ($this->data('all_Dosen') as $dosen) { ?>
        <tr class="data-table-tr">
            <td class="data-table-td"><?php echo $dosen['nip'] ?></td>
            <td class="data-table-td"><?php echo $dosen['nama'] ?></td>
            <td class="data-table-td"><?php echo $dosen['alamat'] ?></td>
            <td class="data-table-td"><?php echo $dosen['prodi'] ?></td>
            <td class="data-table-td"><?php echo $dosen['jurusan'] ?></td>
            <td class="data-table-td"><?php echo $dosen['hp'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

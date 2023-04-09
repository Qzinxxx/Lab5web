<?php

$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'kelas' => $_POST['kelas']
    ];
    $database->insert("mahasiswa", $data);
}

$form = new Form("", "submit");
$form->addField("nim", "Nim");
$form->addField("nama", "Nama");
$form->addField("kelas", "Kelas");
$form->displayForm();

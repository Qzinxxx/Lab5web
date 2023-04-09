<?php

$database = new Database();
$nim = $_GET["nim"];

if (isset($_POST['submit'])) {
    $data = [
        'nama' => $_POST['nama'],
        'kelas' => $_POST['kelas']
    ];
    $database->update("mahasiswa", $data, "nim=" . $nim);
    header("location: home");
}

$data = $database->get("mahasiswa", "where nim=" . $nim);

$form = new Form("", "submit");
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("kelas", "Kelas", $data["kelas"]);
$form->displayForm();

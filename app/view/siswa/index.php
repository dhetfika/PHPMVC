<h1><span style="color: palevioletred; font-style:italic;">Daftar</span>Siswa</h1>

<table class="table" ">
<thead>
    <tr class="table-active" style="background-color: pink;">
        <th scope="col">NO</th>
        <th scope="col">NAMA</th>
        <th scope="col">JURUSAN</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['jurusan'] ?></td>
        </tr>
    </tbody>
</table>

<h6 style="margin-top: 40px;">👇🏻 Kesan Dan Pesan Siswa 👇🏻</h6>
<div class="card" style="width: 18rem; color: greenyellow;">
    <img src="http://localhost/phpmvc/public/image/duit.jpeg" class="card-img-top" alt="duit nya ilang">
    <div class="card-body" style="background-color: black;">
        <p class="card-text">
            <?= $data['Satu kata buat hari ini?'] ?>, Aku bisa jadi kaya punya uang berjuta juta...</p>
    </div>
</div>
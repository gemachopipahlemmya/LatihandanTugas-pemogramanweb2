<?php
// Array asosiatif dengan data tentang Budaya Daerah di Indonesia
$budaya_daerah = [
    [
        "name" => "Tari Saman",
        "description" => "Tari tradisional yang berasal dari Aceh, dikenal dengan gerakan tangan yang cepat.",
        "year" => 1973,
        "origin" => "Aceh",
        "image_url" => "https://www.blibli.com/friends-backend/wp-content/uploads/2022/07/60dacbf4238f5.jpg" // Ganti dengan URL gambar yang sesuai
    ],
    [
        "name" => "Angklung",
        "description" => "Alat musik tradisional yang terbuat dari bambu dan berasal dari Jawa Barat.",
        "year" => 1938,
        "origin" => "Jawa Barat",
        "image_url" => "https://id-test-11.slatic.net/original/c4cbcd4860ab32518f51073f24e47719.jpg" 
    ],
    [
        "name" => "Batik",
        "description" => "Teknik pembuatan kain dengan menggunakan malam untuk menghalangi pewarnaan.",
        "year" => 2009,
        "origin" => "Jawa",
        "image_url" => "https://www.bahankain.com/storage/photos/shares/Artikel/Isi%20artikel/JULI%202022/teknik%20coletan.jpg"
    ],
    [
        "name" => "Tari Kecak",
        "description" => "Tari tradisional Bali yang melibatkan puluhan pria yang melantunkan 'cak' sambil duduk melingkar.",
        "year" => 1930,
        "origin" => "Bali",
        "image_url" => "https://jnewsonline.com/wp-content/uploads/2023/08/tari-kecak.jpg"
    ],
    [
        "name" => "Wayang Kulit",
        "description" => "Pertunjukan wayang yang dibuat dari kulit dan menceritakan kisah Ramayana dan Mahabharata.",
        "year" => 1730,
        "origin" => "Jawa",
        "image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhZrNdjasKhIhI4h_S6WCL8xX2V9uMIbwbfA&s"
    ],
    [
        "name" => "Lompat Batu Nias",
        "description" => "Tradisi melompati batu setinggi 2 meter yang menjadi kebanggaan masyarakat Nias.",
        "year" => 1820,
        "origin" => "Nias, Sumatra Utara",
        "image_url" => "https://awsimages.detik.net.id/community/media/visual/2023/06/04/tradisi-lompat-batu-di-nias-selatan_169.png?w=1200"
    ],
    [
        "name" => "Tari Piring",
        "description" => "Tari tradisional dari Minangkabau yang menggunakan piring sebagai properti utama.",
        "year" => 1900,
        "origin" => "Sumatra Barat",
        "image_url" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiSgV-ZgJrJXRLqN-Fm6Rh9jjdt7myKa5r6RiJMBAQtT-zHrojzoJwiK4Eawu4KhW31LJo0vFzv3VbP8V15C0JQYbluwjsLDPY2J0MgtEVsfmFKIE8o5tileMtj7I-eDji-HxddW0Wqrs4/s640/Sejarah-Asal-Usul-Tari-Piring-serta-Perkembangannya-Kumpulan-Sejarah.png"
    ],
    [
        "name" => "Upacara Ngaben",
        "description" => "Upacara pembakaran jenazah sebagai simbol pengantaran arwah ke alam baka.",
        "year" => 1850,
        "origin" => "Bali",
        "image_url" => "https://indonesia.go.id/assets/upload/headline//1570120518_upacara_ngaben_2.jpg"
    ],
    [
        "name" => "Reog Ponorogo",
        "description" => "Seni pertunjukan yang menggabungkan tari, musik, dan aksi dari Ponorogo.",
        "year" => 1920,
        "origin" => "Ponorogo, Jawa Timur",
        "image_url" => "https://bem.esaunggul.ac.id/thumbnail-buletin-seni_-tari-reog-ponorogo.jpg"
    ],
    [
        "name" => "Tari Jaipong",
        "description" => "Tari kontemporer yang berasal dari Jawa Barat dengan gerakan energik.",
        "year" => 1980,
        "origin" => "Jawa Barat",
        "image_url" => "https://www.prestasiglobal.id/wp-content/uploads/2020/07/Asal-Usul-Tari-Jaipong-Sekolah-Prestasi-Global.jpg"
    ]
];

// Tampilkan array dalam bentuk tabel HTML
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Tahun</th>
        <th>Asal Daerah</th>
        <th>Gambar</th>
      </tr>";

foreach ($budaya_daerah as $budaya) {
    echo "<tr>";
    echo "<td>{$budaya['name']}</td>";
    echo "<td>{$budaya['description']}</td>";
    echo "<td>{$budaya['year']}</td>";
    echo "<td>{$budaya['origin']}</td>";
    echo "<td><img src='{$budaya['image_url']}' width='100'></td>";
    echo "</tr>";
}

echo "</table>";
?>
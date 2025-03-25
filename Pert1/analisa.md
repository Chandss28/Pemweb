# Ilmu Pemrograman Web: Fondasi dalam Pengembangan Aplikasi Berbasis Web
Ilmu pemrograman web adalah bidang dalam ilmu komputer yang berfokus pada pengembangan website dan aplikasi berbasis web. 

Ilmu pemrograman web meningkatkan efisiensi dalam pengembangan website seperti Docker dan Nginx, kita bisa menjalankan website lebih cepat dan stabil. Untuk memudahkan deployment, docker-compose.yml memungkinkan kita menjalankan seluruh sistem dengan satu perintah.

Ilmu pemrograman web digunakan dalam berbagai situasi, seperti saat seseorang ingin membuat website pribadi atau portofolio untuk menampilkan karya mereka. Selain itu, startup dan bisnis sering mengandalkannya untuk mengembangkan aplikasi web guna mendukung operasional dan layanan mereka. Perusahaan besar juga memanfaatkannya untuk membangun sistem berbasis web yang mempermudah manajemen data dan komunikasi. Tak hanya itu, di era modern, teknologi ini semakin banyak digunakan dalam pembuatan layanan berbasis cloud dengan pendekatan microservices, yang memungkinkan pengembangan aplikasi lebih fleksibel dan skalabel.

Ilmu pemrograman web diterapkan di berbagai lingkungan, mulai dari pengembangan lokal hingga server produksi. Dalam proyek ini, saya menggunakan WSL (Windows Subsystem for Linux) untuk menjalankan aplikasi berbasis Linux di Windows, memungkinkan pengembangan yang lebih fleksibel. Setelah pengujian selesai, website dapat dideploy ke server produksi menggunakan Nginx dan Docker, memastikan performa yang optimal dan kemudahan dalam manajemen sistem.

Direktori utama coding berisi seluruh komponen proyek, termasuk folder html yang mungkin digunakan untuk menyimpan file HTML statis. Konfigurasi server dikelola dalam folder nginx, dengan file nginx.conf yang mengatur cara Nginx menangani permintaan.

Sementara itu, folder src menyimpan index.html, yang kemungkinan menjadi halaman utama website. Untuk menjaga fleksibilitas dalam konfigurasi, terdapat file .env yang menyimpan variabel lingkungan, seperti pengaturan port atau kredensial. Seluruh layanan dikelola melalui docker-compose.yml, memungkinkan proyek dijalankan dengan Docker, sehingga proses pengembangan dan deployment menjadi lebih efisien serta mudah direplikasi di berbagai lingkungan.

# Analisis SWOT dalam Pertemuan ini
* Strengths (Kelebihan)
    - Portabilitas tinggi dengan Docker, proyek bisa dijalankan di mana saja tanpa setup ulang.
    - Performa lebih cepat dengan nginx lebih efisien dibanding server lain seperti Apache.
    - Deployment lebih mudah docker-compose.yml memungkinkan otomatisasi layanan.

* Weaknesses (Kelemahan)
    - Konfigurasi yang kompleks apabila salah setting di nginx.conf bisa menyebabkan error.
    - Konsumsi resource tinggi seperti pada Docker dan WSL bisa memakan banyak memori jika tidak dioptimalkan.

* Opportunities (Peluang)
    - Bisa dikembangkan lebih lanjut dengan backend seperti PHP atau Node.js.

    - Cocok untuk pengembangan berbasis cloud 

* Threats (Ancaman)
    - Keamanan data jika .env bocor, bisa menyebabkan kebocoran informasi sensitif.
    - Masalah kompatibilitas apabila ada perbedaan versi Docker atau WSL bisa menimbulkan error.



# ANALISA DARI TUGAS HOMEPAGE DAN PROFILE
# *5W1H*
Website ini adalah halaman statis yang dibuat untuk memperkenalkan Chandika Eka Prasetya, mahasiswa semester 4 Universitas Esa Unggul jurusan Teknik Informatika. Terdiri dari halaman utama dan halaman profil, website ini memberikan informasi dasar tentang pembuatnya, seperti nama, NIM, fakultas, jurusan, serta hobi. Tujuan utama pembuatan website ini adalah sebagai latihan dalam membangun dan mengelola halaman web sederhana.

Agar dapat diakses secara lokal, website ini dijalankan menggunakan NGINX yang dikonfigurasi dalam Docker Compose, sehingga struktur file lebih terorganisir dan memudahkan deployment. Website ini dikembangkan dengan konsep halaman statis tanpa backend atau database, yang membuatnya ringan dan cepat diakses. Namun, kekurangannya adalah kurangnya fitur interaktif, sehingga pengguna hanya dapat melihat informasi tanpa dapat melakukan interaksi lebih lanjut.


# *SWOT*
Website ini memiliki keunggulan dalam kesederhanaan dan kecepatan aksesnya. Karena bersifat statis, website ini tidak memerlukan backend atau koneksi database, sehingga lebih ringan dan mudah dikelola. Selain itu, penggunaan NGINX dan Docker mempermudah deployment dan pengelolaan server. Namun, kekurangannya adalah keterbatasan fitur, kurangnya interaktivitas, serta desain yang masih sederhana.

Meskipun begitu, website ini memiliki peluang untuk dikembangkan lebih lanjut dengan menambahkan fitur dinamis seperti sistem login, formulir interaktif, atau integrasi dengan backend agar lebih fungsional. Tantangan yang perlu dihadapi adalah peningkatan daya tarik tampilan serta aspek keamanan jika ingin dipublikasikan secara lebih luas.


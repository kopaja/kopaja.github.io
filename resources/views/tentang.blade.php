@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Tentang</h2>
                            <p>Apa sih Kopaja itu?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>        
@endsection
@section('content')
<div class="container">
            <div class="row">
                <div class="col-lg-12 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="img/single_cource.png" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Apa itu Kopaja?</h4>
                        <div class="content">
                        KOPAJA adalah organisasi yang bergerak pada bidang pendidikan di Indonesia yang berfokus 
                        pada layanan berbasis pendidikan khususnya perpajakan. KOPAJA merupakan 
                        singkatan dari Kompas Pajak Ajaib. Organisasi ini didirikan pada 5 Oktober 2018 
                        oleh Diah Rawanti dan Titis Hari Dayani.
                            <br>
                            <br>
                            Awal berdirinya KOPAJA yaitu adanya tugas kelompok dari dosen perpajakan untuk membuat prototype perpajakan dan bagi yang hasilnya bagus akan mendapat reward. Sejak saat itu, kami membuat prototype berupa kompas pajak yang berbahan kertas manila, kemudian diwarnai menggunakan crayon dan pensil warna. Tujuan pewarnaan tersebut agar dalam pembelajaran pajak pengguna tidak mudah bosan.
                            <br>
                            <br>
                            Hasil dari prototype yang kami buat kemudian mendapat reward dari dosen karena dianggap potensial. Setelah itu kami diusulkan oleh Ibu Rumiyati S.E., M.Sc. selaku dosen pendamping untuk mengikuti Program Kreativitas Mahasiswa Karsa Cipta (PKM-KC). Dalam mengikuti PKM-KC terdapat beberapa syarat yang harus dipenuhi, salah satunya yaitu 1 tim terdiri dari 3 orang. Dikarenakan kami hanya berdua, maka kami mengajak Gagas Sandi Bharata untuk ikut serta mengembangkan KOPAJA ini. 
                            <br>
                            <br>
                            Bisnis model dari KOPAJA adalah dengan memberikan akses pengajaran untuk mata pelajaran yang berkaitan dengan perpajakan dari tingkat SMA/SMK hingga Perguruan Tinggi yang disajikan secara online melalui website KOPAJA.ac.id maupun offline berupa alat peraga yang dapat di order melalui kontak person yang sudah tersedia.
                            <br>
                            <br>
                            Berikut ini merupakan desain untuk alat peraga KOPAJA:<br>
                            <center>                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{url('/')}}/etrain/img/depan.svg" alt="" width="400px">
                                    <h4>Tampak Depan</h4>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{url('/')}}/etrain/img/belakang.svg" alt="" width="400px">
                                    <h4>Tampak Dalam</h4>
                                </div>
                            </div>
                                
                                
                            </center>
                        </div>

                        <h4 class="title">Tujuan dan Manfaat</h4>
                        <div class="content">
                        Tujuan dari KOPAJA yaitu:
                            <ol class="ordered-list" style="margin-left: 10px">
                                <li><span>Memberikan edukasi mengenai berbagai jenis dan tarif pajak dalam proses pembelajaran perpajakan yang lebih inovatif.</span></li>
                                <li><span>Memberikan kebermanfaatan bagi pengguna, khususnya generasi Z dalam belajar berbagai jenis dan tarif pajak.</span></li>
                            </ol>
                            Manfaat bagi pengguna KOPAJA yaitu:
                            <ol class="ordered-list" style="margin-left: 10px">
                                <li><span>Sebagai media edukasi mengenai berbagai jenis dan tarif pajak.</span></li>
                                <li><span>Bentuk pengembangan alat peraga tentang perpajakan.</span></li>
                                <li><span>Mampu memberikan pemahaman mengenai berbagai jenis dan tarif pajak secara efektif dan menyenangkan.</span></li>
                            </ol>
                        </div>

                        <h4 class="title">Dikembangkan Oleh</h4>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single-defination">
                                        <h4 class="mb-20">Diah Rawanti</h4>
                                        <p>Recently</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-defination">
                                        <h4 class="mb-20">Titis Hari Dayani</h4>
                                        <p>Recently</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-defination">
                                        <h4 class="mb-20">Gagas Sandi Bharata</h4>
                                        <p>Recently</p>
                                    </div>
                                </div>
                        </div>

                        <h4 class="title">Hubungi Kami</h4>
                        <div class="content">
                        Apabila terdapat pertanyaan seputar KOPAJA atau kerjasama dan hal lainnya, hubungi kami di +62 823-2456-4853 atau isi formulir di bawah ini. Anda juga dapat melihat daftar pertanyaan yang sering ditanyakan di halaman Bantuan
                      
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <form action="#">
                                    <div class="mt-10">
                                        Nama
                                        <input type="text" name="first_name" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'"
                                        required class="single-input">
                                    </div>
                                    <div class="mt-10">
                                        Email
                                        <input type="text" name="last_name" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"
                                        required class="single-input">
                                    </div>
                                    <div class="mt-10">
                                        Nomor Handphone
                                        <input type="text" name="last_name" placeholder="Nomor Handphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"
                                        required class="single-input">
                                    </div>
                                    <div class="input-group-icon mt-10">
                                        Kategori
                                        <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                        <div class="form-select" id="default-select">
                                                    <select>
                                                        <option value=" 1">Pilih</option>
                                            <option value="1">Kritik dan Saran</option>
                                            <option value="1">Keluhan</option>
                                            <option value="1">Pertanyaan Lain</option>
                                            </select>
                                        </div>
                                    </div>
                                    

                                    <div class="mt-10">
                                        Subjek Pesan
                                        <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"
                                        required></textarea>
							</div>
							<!-- For Gradient Border Use -->
							<!-- <div class="mt-10">
										<div class="primary-input">
											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
											<label for="primary-input"></label>
										</div>
									</div> -->
                                    <br>
                                    <a class="btn_1" href="#">Send</a>
						</form>
					    </div> 
                    </div>
                    <h4 class="title">KONTAK KAMI</h4>
                    Jam Kerja:
                    <ul class="unordered-list">
                        <li>10.00 – 21.00 WIB (Weekdays)</li>
                        <li>10.00 – 17.00 WIB (Weekend)</li>
                    </ul>
                    <br>
                    Di luar jam kerja di atas, Anda dapat menghubungi kami melalui email atau formulir yang tersedia di halaman ini. Kami akan segera menghubungi Anda!
                    <br>
                    No. HP/WA	: +62 823-2456-4853
                    <br>    
                    Email		: kompaspajak@gmail.com
                    <br><br><br>
                </div>


              
            </div>
        </div>
@endsection
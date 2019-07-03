<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('landing');


Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/pajakpusatpasal4',function(){
    return view('materi.pasal4');
})->name('pasal4');

Route::get('/latihansoalpasal4',function(){
    return view('latihansoal.latsoalpasal4');
})->name('latsoalpasal4');

Route::get('/downloadPasal4', 'DownloadCOntroller@materiPasal4')->name('downloadPasal4');




Route::get('/soalpphpasal4ayat2',function(){
    return view('soal.soalpphpasal4ayat2');
})->name('soalpphpasal4ayat2');

Route::get('/cekSoalpphpasal4ayat2', 'soalController@cekSoalpphpasal4ayat2')->name('cekSoalpphpasal4ayat2');






Route::get('/latihansoalpasal15',function(){
    return view('latihansoal.latsoalpasal15');
})->name('latsoalpasal15');

Route::get('/pajakpusatpasal15',function(){
    return view('materi.pasal15');
})->name('pasal15');

Route::get('/pphpasal15',function(){
    return view('soal.pphpasal15');
})->name('pphpasal15');

Route::get('/cekSoalpphpasal15', 'soalController@cekSoalpphpasal15')->name('cekSoalpphpasal15');

Route::get('/downloadPasal15', 'DownloadController@materiPasal15')->name('downloadPasal15');




Route::get('/pajakpusatpasal21',function(){
    return view('materi.pasal21');
})->name('pasal21');

Route::get('/latihansoalpasal21',function(){
    return view('latihansoal.latsoalpasal21');
})->name('latsoalpasal21');

Route::get('/soalpasal21',function(){
    return view('soal.soalpasal21');
})->name('soalpasal21');

Route::get('/soalpphpasal21',function(){
    return view('soal.soalpphpasal21');
})->name('soalpphpasal21');

Route::get('/cekSoalPphPasal21', 'soalController@cekSoalPphPasal21')->name('cekSoalPphPasal21');

Route::get('/downloadPasal21', 'DownloadController@materiPasal21')->name('downloadPasal21');




Route::get('/pphpasal26',function(){
    return view('soal.pphpasal26');
})->name('pphpasal26');

Route::get('/cekSoalpphpasal26', 'soalController@cekSoalpphpasal26')->name('cekSoalpphpasal26');








Route::get('/pajakpusatpasal22',function(){
    return view('materi.pasal22');
})->name('pasal22');

Route::get('/latihansoalpasal22',function(){
    return view('latihansoal.latsoalpasal22');
})->name('latsoalpasal22');

Route::get('/pphpasal22',function(){
    return view('soal.pphpasal22');
})->name('pphpasal22');

Route::get('/cekSoalpphpasal22', 'soalController@cekSoalpphpasal22')->name('cekSoalpphpasal22');

Route::get('/downloadPasal22', 'DownloadController@materiPasal22')->name('downloadPasal22');






Route::get('/pajakpusatpasal23',function(){
    return view('materi.pasal23');
})->name('pasal23');

Route::get('/latihansoalpasal23',function(){
    return view('latihansoal.latsoalpasal23');
})->name('latsoalpasal23');

Route::get('/pphpasal23',function(){
    return view('soal.pphpasal23');
})->name('pphpasal23');

Route::get('/cekSoalpphpasal23', 'soalController@cekSoalpphpasal23')->name('cekSoalpphpasal23');

Route::get('/downloadPasal23', 'DownloadController@materiPasal23')->name('downloadPasal23');




Route::get('/pajakpusatpasal25',function(){
    return view('materi.pasal25');
})->name('pasal25');

Route::get('/latihansoalpasal25',function(){
    return view('latihansoal.latsoalpasal25');
})->name('latsoalpasal25');

Route::get('/pphpasal25',function(){
    return view('soal.pphpasal25');
})->name('pphpasal25');

Route::get('/cekSoalpphpasal25', 'soalController@cekSoalpphpasal25')->name('cekSoalpphpasal25');

Route::get('/downloadPasal25', 'DownloadController@materiPasal25')->name('downloadPasal25');






Route::get('/pajakpusatpasal26',function(){
    return view('materi.pasal26');
})->name('pasal26');

Route::get('/soalpphpasal26',function(){
    return view('soal.pphpasal26');
})->name('soalpphpasal26');

Route::get('/cekSoalpphpasal26', 'soalController@cekSoalpphpasal26')->name('cekSoalpphpasal26');

Route::get('/downloadPasal26', 'DownloadController@materiPasal21')->name('downloadPasal26');







Route::get('/pajakpusatppn',function(){
    return view('materi.ppn');
})->name('ppn');

Route::get('/latihansoalppn',function(){
    return view('latihansoal.latsoalppn');
})->name('latsoalppn');

Route::get('/soalppn',function(){
    return view('soal.soalppn');
})->name('soalppn');

Route::get('/cekSoalPpn', 'soalController@cekSoalPpn')->name('cekSoalPpn');

Route::get('/downloadPpn', 'DownloadController@materiPpn')->name('downloadPpn');







Route::get('/pajakpusatppnbm',function(){
    return view('materi.ppnbm');
})->name('pnbm');


Route::get('/soalppnbm',function(){
    return view('soal.soalppnbm');
})->name('soalppnbm');

Route::get('/cekSoalppnbm', 'soalController@soal')->name('cekSoalppnbm');

Route::get('/downloadPpnbn', 'DownloadController@materiPpnbn')->name('downloadPpnbn');






Route::get('/latihansoalppnbm',function(){
    return view('latihansoal.latsoalppnbm');
})->name('latsoalppnbm');

Route::get('/pajakpusatbeamterai',function(){
    return view('materi.beamaterai');
})->name('beamaterai');

Route::get('/latihansoalbeamaterai',function(){
    return view('latihansoal.latsoalbeamaterai');
})->name('latsoalbeamaterai');

Route::get('/soalbeamaterai',function(){
    return view('soal.soalbeamaterai');
})->name('soalbeamaterai');

Route::get('/cekSoalbeamaterai', 'soalController@cekSoalbeamaterai')->name('cekSoalbeamaterai');

Route::get('/downloadBeaMaterai', 'DownloadCOntroller@materiBeaMaterai')->name('downloadBeaMaterai');






Route::get('/pbb',function(){
    return view('materi.pbb');
})->name('pbb');

Route::get('/latihansoalpbb',function(){
    return view('latihansoal.latsoalpbb');
})->name('latsoalpbb');

Route::get('/soalpbb',function(){
    return view('soal.soalpbb');
})->name('soalpbb');

Route::get('/cekSoalPbb', 'soalController@cekSoalPbb')->name('cekSoalPbb');

Route::get('/downloadPbb', 'DownloadCOntroller@materiPbb')->name('downloadPbb');






Route::get('/pajakprovinsi',function(){
    return view('materi.pajakprov');
})->name('pajakprovinsi');

Route::get('/latihansoalpajakprov',function(){
    return view('latihansoal.latsoalpajakprov');
})->name('latsoalpajakprov');

Route::get('/downloadPajakProv', 'DownloadCOntroller@materiPajakProv')->name('downloadPajakProv');






Route::get('/pajakkabupaten',function(){
    return view('materi.pajakkab');
})->name('pajakkabupaten');

Route::get('/latihansoalpajakkab',function(){
    return view('latihansoal.latsoalpajakkab');
})->name('latsoalpajakkab');

Route::get('/downloadPajakKab', 'DownloadCOntroller@materiPajakKab')->name('downloadPajakKab');







Route::get('/pajakprovdankab',function(){
    return view('soal.pajakprovdankab');
})->name('pajakprovdankab');

Route::get('/cekSoalpajakprovdankab', 'soalController@cekSoalpajakprovdankab')->name('cekSoalpajakprovdankab');





Route::get('/tentang',function(){
    return view('tentang');
})->name('tentang');


Route::get('/bantuan',function(){
    return view('bantuan');
})->name('bantuan');
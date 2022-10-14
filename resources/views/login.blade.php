{{$prodi='informatika'}}
@if ($prodi == 'informatika')
    <p>Anda di Fakultas Teknik</p>
@elseif ($prodi == 'Akuntansi')
    <p> Anda di Fakultas Ekonomi dan Bisnis</p>
@else
    <p>Anda bukan mahasiswa sini</p>
@endif
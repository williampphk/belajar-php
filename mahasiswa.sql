CREATE DATABASE fakultas;
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR (4) NOT NULL,
    nama_jurusan VARCHAR (50) NOT NULL

);
 
CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR (8) NOT NULL,
    nama VARCHAR (50) NOT NULL,
    jenis_kelamin ENUM ('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR (50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR (255) NOT NULL,
    FOREIGN KEY ( id_jurusan) REFERENCES jurusan (id)
);

insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin,tempat_lahir,tanggal_lahir,alamat) 
values ('1', '12345678', 'william', 'laki-laki', 'medan', '2000-12-28', 'jl.purwodadi');

update mahasiswa set alamat ="jalan. kaki" where id =1;
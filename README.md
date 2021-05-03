# UAS_RAT

Untuk menjalankan program ini, haruslah memiliki server yang dapat membaca dan mengeksekusi syntax php seperti xampp.
Untuk menerima interaksi api, dapat menggunakan aplikasi third party seperti postman maupun plugin api chrome.
Buat db suatu db dengan nama dba untuk program ini.
Masukkan query berikut pada dba untuk membuat tabel:
  CREATE TABLE `department` (
  `dept_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
Lalu masukkan query berikut untuk untuk memasukkan data:
  insert  into `department`(`dept_id`,`dept_name`) values 
(10,'ACCOUNTING'),
(20,'RESEARCH'),
(30,'SALES'),
(40,'OPERATIONS');
Jalankan aplikasi postman.
Masukkan url tempat file di simpan pada root folder host pada postman.
Akan terlihat interaksi api pada aplikasi postman jika menggunakan url yang bersesuain.

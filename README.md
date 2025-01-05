# Thesis Administration System 

## Overview 
- **Project Name** : Thesis Administration System 
- **Description** :
  The management of thesis activities in USU considered not practical and efficient. This is due to manual management like processing, analysis, and evaluation data, that cause late submission files, delay in determining some important dates, and vulnerable data to lose and damage. Therefore developing a thesis administration system is important to build an automatic system less erros and effective. 
- **Purpose**
    - Simplify the administration process for all parties.
    - Minimize damage and lose files during the process.
    - Improve the quality of campus academic services. 
- **Technologies Used**
    - Hardware : CPU, Disk, Memory.
    - Software: Visual Studi Code, XAMPP, Web Browser.
    - Others: HTML, CSS, JavaScript, Bootstrap, PHP, Laravel, Composer. 
## Features 
- **User and Schedule Management** : This features help Admin to do CRUD (create, read, update and delete) users and schedules. 
- **Print and Download File** : This features help all users to download and print file from system. 
- **Input Grades** : This features help Admin to input grades that students gained through their thesis. 
- **Searching** : This feature help all users to find data / file easily. 
## Database Schema 
- **Table and Fields**
    - Database Name : administrasi_skripsi
    - Total Tables : 15 main tables & 7 logs tables
    - Total Virtual Tables : 16 view tables
      

      | Table name | Atributes | Purpose |
      | ---------- | --------- | ------- |
      | users | id, username, email, status, password | saving user's data for login |
      | admins | id, nama, id_user |saving admin's data that connected with users table. Admin can access all features in the system|
      | dosens | nip, nama, NIDN, jenis_kelamin, id_user | saving lecture's data that connected with users table. Lecture can access the list of students doing thesis with their schedules.|
      | dosen_pembimbings | nim, nip_dosbing1, nip_dosbing2 | saving all supervisors that connected with mahasiswas table |
      | dosen_pengujis | nim, nip_penguji1, nip_penguji2 | saving all examining lecturer that connected with mahasiswas table |
      | jadwal_semhas | nim, tanggal_semhas, waktu, tempat | saving all student's schedules for seminar hasil event |
      | jadwal_sempros | nim, tanggal_sempro, waktu, tempat | saving all student's schedules for seminar proposal event |
      | jadwal_sidangs | nim, tanggal_sempro, waktu, tempat | saving all student's schedules for sidang meja hijau event |
      | keterangan_status_akses | no_statusAkses, keterangan | saving status' information (admin, dosen, kaprodi, mahasiswa) |
      | mahasiswas | nim, nama, angkatan, jenis_kelamin, foto, status, id_user | saving student' data. Students can access their own schedules, and using the print and download features |
      | nilai_i_p_k_s | nim, IPK | saving student's final grade |
      | nilai_seminar_hasil | nim, nip, (assesment components) | saving student's grades for semhas event |
      | nilai_sidang_meja_hijaus | nim, nip, (assesment components) | saving student's grades for sidang event |
      | nilai_uji_programs | nim, nip, (assesment components) | saving student's grades for uji program event |
      | skripsis | id, nim, judul_skripsi, bidang_ilmu | saving thesis' identity |

- **Queries**
    - CRUD (Create, Read, Update, Delete)
    - Trigger & View
    - Function & Procedure
- **Entity Relationship Diagram (ERD)**
  ![image](https://github.com/user-attachments/assets/330bc193-bb76-4bee-ac13-c9f3b75527c7)
## Installation Guide 
## Challenges and Solutions 
## Future Improvement

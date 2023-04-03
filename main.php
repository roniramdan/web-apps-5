<?php 
include "crud.php";
$crud = new CRUD;
?>
<!doctype html>
<html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" href="#">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" integrity="sha512-Fppbdpv9QhevzDE+UHmdxL4HoW8HantO+rC8oQB2hCofV+dWV2hePnP5SgiWR1Y1vbJeYONZfzQc5iII6sID2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css"> 
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    
      <title>CRUD PBO</title>
    </head>

      <body style="width: 100%;"> 

        <main id="main">  
      
          <div class="container">

          <h1>
              Data Siswa
          </h1>

          <br> 

            <button class="btn btn-primary" id="tambah-data"> <i class="fa-solid fa-plus-large"></i> Tambah Data</button>

            <br> &nbsp; 
            <table class="table table-bordered table-hovered" id="dt-table">
                <thead>
                  <th width="5%">  NIS </th>
                  <th width="20%"> Nama </th>
                  <th width="10%"> Telp </th>
                  <th width="10%"> Tempat Lahir </th>
                  <th width="10%"> Tanggal Lahir </th>
                  <th width="20%"> Alamat </th>
                  <th width="20%"> Opsi </th>
                </thead>
                <tbody> 
                </tbody>
              </table> 
          
          </div>
      </main>

    <!-- modal form  --> 
    <div class="modal fade" id="FormTambahUbahData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <form action="" id="formdata">
                  <input type="hidden" name="id" id="id">
                  <div class="mb-3">
                    <label for="nisn" class="form-label">NISN </label>
                    <input type="text" name="nisn" class="form-control autofocus" id="nisn" placeholder="Masukkan NISN">
                  </div>

                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama </label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
                  </div>

                  <div class="mb-3">
                    <label for="telp" class="form-label">Telp </label>
                    <input type="text" name="telp" class="form-control" id="telp" placeholder="Masukkan Telp">
                  </div>

                  <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir </label>
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                  </div> 
                  
                  <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir </label>
                    <input type="text" name="tanggal_lahir" class="form-control datepicker" id="tanggal_lahir" placeholder="Tanggal Lahir">
                  </div>

                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat </label>
                    <textarea name="alamat"  class="form-control"  id="alamat" cols="30" rows="10"></textarea>  
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" onclick="SaveData();">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal form  -->
 
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
   
   <script> 
      //sintaks jquery
      $(document).ready(function () { 

          //inisialisasi datatable
          $('#dt-table').DataTable({
            //panggil data ke backend
            ajax:"index.php?action=load-data"
          }); 
          
          $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format:'yyyy-mm-dd', 
          });
          
      });
     
      $("#tambah-data").on("click",function(){
         $("#FormTambahUbahData").modal("show"); 
         $("#staticBackdropLabel").html("Form Tambah Data");
      }); 

      function SaveData(){      
          //ajax
          //asynchronous javascript and xml
          $.ajax({
            url :"index.php?action=save",
            data :$("#formdata").serialize(),
            type :"POST", 
            success:function(result){  
                if(result.code == 200){
                  $("#FormTambahUbahData").modal("hide"); 
                  $("#dt-table").DataTable().ajax.reload();
                  $("#formdata")[0].reset();
                  alert("Data Berhasil Disimpan!");
                }else{
                  alert("Terdapat Kesalahan!");
                  $("#formdata")[0].reset();
                } 
            }
          });
      } 
       

      function Hapus(id){
        if(confirm("Anda yakin ingin menghapus data ini?")){
         
          $.ajax({
            url :"index.php?action=delete",
            data :{id:id},
            type :"POST", 
            success:function(result){  
                if(result.code == 200){ 
                  $("#dt-table").DataTable().ajax.reload(); 
                  alert("Data Berhasil Dihapus!");
                }else{
                  alert("Terdapat Kesalahan!");
                } 
            }
          });

        }
        else{
            alert("Batal Hapus Data!");
        }
      
      }


      // CRUD 
      // create read update delete
      function Ubah(id){
        $.get("index.php?action=getdata&id="+id,function(result){ 
          var parsing = JSON.parse(result); 
          $("#FormTambahUbahData").modal("show"); 
          $("#staticBackdropLabel").html("Form Ubah Data");
            $("#id").val(parsing.id);
            $("#nisn").val(parsing.nisn);
            $("#nama").val(parsing.nama);
            $("#alamat").html(parsing.alamat);
            $("#telp").val(parsing.telp);
            $("#tempat_lahir").val(parsing.tempat_lahir);
            $("#tanggal_lahir").val(parsing.tanggal_lahir);
        });
      }
     
    </script>

  </body>
  <script>
   $(document).ready(function () { 

        //inisialisasi datatable
        $('#example').DataTable({
            //panggil data ke backend
            ajax:"index.php?action=index"
            }); 

            $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format:'yyyy-mm-dd', 
        });

        }); 
  </script>
</html>
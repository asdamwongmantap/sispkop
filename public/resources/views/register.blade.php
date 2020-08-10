<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('/assets/images/logoawr.png')}}" type="image/ico" />

  <title>SISPKOP</title>
	<!-- Bootstrap -->
    <link href="{{ asset('/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
	<!--JQUERY JS-->
	 <script src="{{ asset('/assets/js/jquery.js')}}"></script>
	<!-- Custom Theme Style -->
    <link href="{{ asset('/assets/build/css/custom.min.css')}}" rel="stylesheet"> 
</head>
  
  <body class="login">
    
  <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">
              <div class="x_panel">
                <div class="x_title">
        <h2>FORMULIR  PENDAFTARAN  ANGGOTA</br>
        <small>KOPERASI PEGAWAI SAMUDERA INDONESIA (KPSI)</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height:100%">
                <medium>Yang  bertanda-tangan  di bawah  ini  :</medium>
                <div>&nbsp;</div>
                <form id="form-addmember" data-parsley-validate class="form-horizontal form-label-left" method="post">
                    {{csrf_field()}}
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;" for="nik">NIK & NAMA 
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="nik" name="nik" aria-describedby="nik" placeholder="NIK">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="nama" name="nama" aria-describedby="nama" placeholder="Nama">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;" for="email">Email
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="email" name="email" aria-describedby="email" placeholder="Email">
						</div>
					
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;" for="nik">Tgl. NIK (Tgl. Masuk Kerja)
						</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="tgl" name="tgl" aria-describedby="tgl" placeholder="Tanggal">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="bln" name="bln" aria-describedby="bln" placeholder="Bulan">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="thn" name="thn" aria-describedby="thn" placeholder="Tahun">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;" for="nik">Tanggal  Lahir
						</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="tgllahir" name="tgllahir" aria-describedby="tgllahir" placeholder="Tanggal">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="blnlahir" name="blnlahir" aria-describedby="blnlahir" placeholder="Bulan">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="thnlahir" name="thnlahir" aria-describedby="thnlahir" placeholder="Tahun">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;" for="div">Karyawan  Bagian / Divisi 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="div" name="div" aria-describedby="div" placeholder="Divisi">
						</div>
						
          </div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;" for="company">Perusahaan / PT. 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="company" name="company" aria-describedby="company" placeholder="Nama Perusahaan">
            </div>
           
          </div>
          <div>&nbsp;</div>
            <medium>Dengan  ini  saya  mendaftarkan  diri  untuk  menjadi   Anggota   Koperasi   Pegawai  dan  saya  bersedia /sanggup  mematuhi  peraturan-peraturan sesuai  dengan   Anggaran Dasar  dan  Anggaran  Rumah  Tangga  yang  telah  ditetapkan  Koperasi  PSI.</medium>
          <p></p>

            <medium>Sebagai tanda keikut-sertaan saya,  bersama  ini  saya  setorkan  simpanan  pokok, simpanan  wajib dan  simpanan  sukarela,  dengan  cara  pemotongan  gaji  bulanan  saya,  sbb.:</medium></br>
            <div>&nbsp;</div>

             <ul>
               <li><medium>Simpanan  Pokok : Rp. 100.000,-- untuk sekali penyetoran bulan awal</medium></li>
               <li><medium>Simpanan  Wajib : Rp. 50.000,-- Setiap Bulan</medium></li>
               <li><medium>Simpanan  Sukarela : Rp. ..........................,-- Setiap Bulan</medium></li>
             </ul>
             <medium>Atas perhatian dan keikut-sertaan saya sebagai anggota, saya mengucapkan terima kasih.</medium></br>
            <div>&nbsp;</div>
						<div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<button type="submit" class="btn btn-primary" id="savebtn">Simpan</button>
			
					</div>
					</div>
                    
                    </form>
				</div>
              </div>
            </div>
	<!-- jQuery -->
    <!-- <script src="{{ asset('/assets/vendors/jquery/dist/jquery.min.js')}}"></script> -->
    <!-- Bootstrap -->
    <!-- <script src="{{ asset('/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script> -->
	 <!-- Custom Theme Scripts -->
	<!-- <script src="{{ asset('/assets/build/js/custom.min.js')}}"></script> -->
	@include('template/footermeta')
	<script type="text/javascript">
		 $('#form-addmember').on('submit',function(e) {
			var form = $('#form-addmember')[0];
			var data = new FormData(form);
			swal({
			  title: "Simpan Data",
			  text: "Apakah anda ingin melakukan pendaftaran ?",
			  confirmButtonText:"Yakin",
			  confirmButtonColor: "#002855",
			  cancelButtonText:"Tidak",
			  showCancelButton: true,
			  closeOnConfirm: false,
			  type: "warning",
			  showLoaderOnConfirm: true
			}, function () {
				$.ajax({
					type: "POST",
					enctype: 'multipart/form-data',
					url:"{{url('/savemember')}}",
					data: data,
					processData: false,
					contentType: false,
					cache: false,
					success:function(e){
						if (e !== "error") {
						swal({
						  title: "Success",
						  confirmButtonColor: "#002855",
						  text: "Data berhasil disimpan !.",
						  type: "success"
						},function(){
							window.location='/sispkop';
						  });
						}
						else{
						swal({
						  title: "Failed",
						  confirmButtonColor: "#002855",
						  text: e+"1",
						  type: "error"
						});
						}
						
					},
					error:function(xhr, ajaxOptions, thrownError){
						swal({
						  title: "Failed",
						  confirmButtonColor: "#002855",
						  text: e+"2",
						  type: "error"
						});
					}
					
				});
				return false;
			});
			e.preventDefault(); 
		  });
		  
    </script> 
  </body>
</html>

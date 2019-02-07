
<h1>Roti</h1>

<?php if($this->session->flashdata('pesan')): ?>


	<div class="alert alert-warning"><?= $this->session->flashdata('pesan') ?></div>


<?php endif?>



<?php if($this->session->userdata('level')=="admin"){?>
<a href="#tambah" class="btn btn-primary" data-toggle="modal" style="float: right;">Tambah</a>

<?php }?>
<table class="table table-hover table-stripped">

	<thead>

		<tr>

			<td>no</td><td>kode_roti</td><td>nama roti</td><td>kategori</td><td>harga</td><td>stok</td><td></td><td></td>

		</tr>

	</thead>

	<tbody>


		<?php $no = 0; foreach($roti as $bk): $no++;?>







		<tr>

			<td><?=$no?></td><td><?=$bk->kode_roti?></td><td><?=$bk->nama_roti?></td><td><?=$bk->nama_kategori?></td><td><?=$bk->harga?></td><td><?=$bk->stok?></td>

			<td><?php if($this->session->userdata('level')=="admin"){?> <a href="#ubah" data-toggle="modal" onclick="edit(<?=$bk->kode_roti?>)"  class="btn btn-warning">Ubah</a><?php }else{ 		echo "anda kasir"; }?></td>

			<td><?php if($this->session->userdata('level')=="admin"){?><a href="<?=base_url('index.php/Roti/hapus/'.$bk->kode_roti)?>" onclick="return confirm('apakah anda yakin untuk menghapus')" class="btn btn-danger">Hapus</a><?php }else{ echo "anda kasir"; }?></td>

		</tr>



	<?php endforeach?>


</tbody>

</table>




<div class="modal fade" id="tambah" >
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">


			<div class="row">

			<div class="col-md-6">
				<div class="modal-title">Tambah Roti</div>
			</div>
			<div class="col-md-6">
				<button class="btn " data-dismiss = "modal" style="float: right; ">X</button>
				</div>

				</div>

			</div>

			<div class="modal-body">


				<form action="<?=base_url('index.php/Roti/tambah')?>" method="post" enctype="multipart/form-data">

					<table>

						<tr>
							<td>nama roti</td>
							<td><input type="text" name="nama_roti" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>kategori</td>
							<td>


								<select name="kategori" style="margin-left: 20px; ">
									<?php foreach ($kategori as $kt): ?>

										<option value="<?= $kt->kode_kategori?>" ><?= $kt->nama_kategori?></option>
									<?php endforeach?>
								</select>
							</td>
						</tr>

						<tr>
							<td>harga</td>
							<td><input type="text" name="harga" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>stok</td>
							<td><input type="number" name="stok" style="margin-left: 20px;"></td>
						</tr>

					</table>


					<center><input type="submit" name="tambah" value="tambah" class="btn btn-warning" style="margin-top: 30px;"></center>

				</form>

			</div>
		</div>
	</div>

</div>



<div class="modal fade" id="ubah" >
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">

				<div class="row">

			<div class="col-md-6">
				<div class="modal-title">Ubah Roti</div>
			</div>
			<div class="col-md-6">
				<button class="btn " data-dismiss = "modal" style="float: right; ">X</button>
				</div>

				</div>
			</div>

			<div class="modal-body">


				<form action="<?=base_url('index.php/Roti/update')?>" method="post" enctype="multipart/form-data">

					<table>

						<input type="hidden" name="kode_roti" required id="kode_roti" style="margin-left: 20px;">

						<tr>
							<td>nama roti</td>
							<td><input type="text" name="nama_roti"  required  id="nama_roti" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>kategori</td>
							<td>


								<select name="kategori" style="margin-left: 20px; " id="kategori" required >
									<?php foreach ($kategori as $kt): ?>

										<option value="<?= $kt->kode_kategori?>" ><?= $kt->nama_kategori?></option>
									<?php endforeach?>
								</select>
							</td>
						</tr>

						<tr>
							<td>harga</td>
							<td><input type="text" name="harga" required  id="harga" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>stok</td>
							<td><input type="number" name="stok" required  id="stok" style="margin-left: 20px;"></td>
						</tr>

					</table>


					<center><input type="submit" value="Ubah" name="update" required  class="btn btn-warning" style="margin-top: 30px;"></center>

				</form>

			</div>
		</div>
	</div>

</div>




<script >


	function edit(kode_roti){
		$.ajax({
			type:"post",
			url:"<?=base_url()?>index.php/Roti/tampil_ubah_roti/"+kode_roti,
			dataType:"json",


			success:function(data){
				$("#kode_roti").val(data.kode_roti);
				$("#nama_roti").val(data.nama_roti);
				$("#kategori").val(data.kode_kategori);
				$("#stok").val(data.stok);
			}
		});
	}

</script>

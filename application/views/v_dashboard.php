	<h3 >Welcome, <?=$this->session->userdata('nama_user')?> !</h3>
		<p class="panel-subtitle">Tokoroti</p>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
							<?php if($this->session->userdata('level')=='admin'){?>
								<a href="<?=base_url('index.php/Kasir')?>" style="color: black">
								<?php }?>
									<div class="metric">
										<span class="icon"><i class="fas fa-users"></i></span>
										<p>
											<span class="number"><?= $user?></span>
											<span class="title">Kasir</span>
										</p>
									</div>
								<?php if($this->session->userdata('level')=='admin'){?>
								</a>
								<?php }?>
								</div>
								<div class="col-md-4">

								<a href="<?=base_url('index.php/Histori')?>" style="color: black">
									<div class="metric">
										<span class="icon"><i class="fas fa-chart-line"></i></span>
										<p>
											<span class="number"><?= $transaksi ?></span>
											<span class="title">penjualan</span>
										</p>
									</div>

									</a>
								</div>
								<div class="col-md-4">
								<a href="<?=base_url('index.php/Roti')?>" style="color: black">
									<div class="metric">
										<span class="icon"><i class="fas fa-bread-slice"></i></i></span>
										<p>
											<span class="number"><?= $roti ?></span>
											<span class="title">Roti</span>
										</p>
									</div>

									</a>
								</div>
							</div>

						</div>

	<div class="boss" style="width">




	</div>

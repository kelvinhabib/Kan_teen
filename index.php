<?php 

    include "classes/layout-class.php";

    $app = new Layout();

    $app->meta();
 ?>
  <!-- <div class="kontainer"> -->

  <div class="header">

  </div>
	<!-- Konten-->
		<div class="row mgbtm">
			<div class="cont-cat">

				<div class="row pad">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<h1 style="float: left">Paijo</h1>
            <div class="sort">
              <select class="form-control">
                <option>Urut berdasarkan</option>
                <option>Makanan</option>
                <option>Minuman</option>
                <option>Cemilan</option>
              </select>
            </div>
					</div>

				</div><br>
				<div class="row pad">
					<?php 
						for($i=1; $i < 9; $i++){
					?>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="gbr-cat">
							<!-- pop up -->
							<div id="ps<?php echo $i ?>" class="pop">
								<div class="in-pop">
									<div onclick="tutup('ps<?php echo $i ?>')" class="glyphicon glyphicon-remove close"></div>
									<div class="row mgbtm">
										<!-- kolom gambar produk pada pop up -->
										<div class="col-xs-12 col-sm-6 col-md-6">
											<img src="images/p<?php echo $i ?>.jpg" style="width: 100%; height: 100%">
										</div>
										<!-- sampe sini -->
										<!-- kolom keterangan produk pada popp up -->
										<div class="col-xs-12 col-sm-6 col-md-6">
											<h1>Food <?php echo $i ?></h1>
											<h3>Rp <?php echo $i ?>5.000</h3>
											<p>
												Deskripsi dari masing-masing makanan, minuman, atau pun cemilan, akan ditampilkan di sini. Deskripsi tersebut berisi tentang apa saja yang kira-kira mendukung terhadap produk itu sendiri agar pelanggan merasa tertarik.
											</p>
										</div>
										<!-- sampe sini -->
									</div>

									<div class="row mgbtm">
										<form>
											<div class="col-xs-7 col-sm-9 col-md-9">
												<input class="form-control" type="text" name="" placeholder="Masukan voucher Anda">
											</div>
											<div class="col-xs-5 col-sm-3 col-md-3">
												<div class="btn btn-warning" style="width: 100%">Cek Voucher</div>
											</div>
										</form>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="btn btn-success" style="width: 100%">Pesan Sekarang!</div>
										</div>
									</div>
								</div>
							</div>
							<!-- batas pop up -->
							<div class="ket-produk">
								<div class="btn btn-pesan" onclick="tampil('ps<?php echo $i ?>')">Pesan</div>
							</div>
							<img src="images/p<?php echo $i ?>.jpg" style="width: 100%; height: 100%">
						</div>
					</div>
					<?php } ?>
				</div>
          		

		        <div class="row mgbtm">
		            <div class="promo">
		            	<div class="tbl-hs">
		            		<div class="btn btn-hs">Hunt!</div>
		            	</div>
		            </div>
		        </div>

        		<div class="row pad">
					<?php 
						for($i=9; $i < 17; $i++){
					?>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="gbr-cat">
							<!-- pop up -->
							<div id="ps<?php echo $i ?>" class="pop">
								<div class="in-pop">
									<div onclick="tutup('ps<?php echo $i ?>')" class="glyphicon glyphicon-remove close"></div>
									<div class="row mgbtm">
										<!-- kolom gambar produk pada pop up -->
										<div class="col-xs-12 col-sm-6 col-md-6">
											<img src="images/p1.jpg" style="width: 100%; height: 100%">
										</div>
										<!-- sampe sini -->
										<!-- kolom keterangan produk pada popp up -->
										<div class="col-xs-12 col-sm-6 col-md-6">
											<h1>Food <?php echo $i ?></h1>
											<h3>Rp <?php echo $i ?>5.000</h3>
											<p>
												Deskripsi dari masing-masing makanan, minuman, atau pun cemilan, akan ditampilkan di sini. Deskripsi tersebut berisi tentang apa saja yang kira-kira mendukung terhadap produk itu sendiri agar pelanggan merasa tertarik.
											</p>
										</div>
										<!-- sampe sini -->
									</div>

									<div class="row mgbtm">
										<form>
											<div class="col-xs-7 col-sm-9 col-md-9">
												<input class="form-control" type="text" name="" placeholder="Masukan voucher Anda">
											</div>
											<div class="col-xs-5 col-sm-3 col-md-3">
												<div class="btn btn-warning" style="width: 100%">Cek Voucher</div>
											</div>
										</form>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="btn btn-success" style="width: 100%">Pesan Sekarang!</div>
										</div>
									</div>
								</div>
							</div>
							<!-- batas pop up -->
							<div class="ket-produk">
								<div class="btn btn-pesan" onclick="tampil('ps<?php echo $i ?>')">Pesan</div>
							</div>
							<img src="images/p1.jpg" style="width: 100%; height: 100%">
						</div>
					</div>
					<?php } ?>
				</div>

			</div>
		</div>
		<!-- Sampai Sini -->

	<!-- </div> -->
</body>
</html>

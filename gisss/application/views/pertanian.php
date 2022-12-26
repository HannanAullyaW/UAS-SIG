<div class="content-padder content-background">
	<div class="uk-section-small uk-section-default header">
		<div class="uk-container uk-container-large">
			<h2><span uk-icon="icon: pencil; ratio: 2"></span> <?= $judul ?></h2>
		</div>
	</div>
	<div class="uk-section-small">
		<div class="uk-container uk-container-large">
			<!-- Form -->

			<div class="uk-container uk-container-large" id="tampilpertaniansemua">
				<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">


					<div class="uk-clearfix uk-margin-small-bottom">
						<div class="uk-float-right">
							<form class="uk-search uk-search-default uk-margin-remove-righ">
								<span uk-search-icon></span>
								<input class="uk-search-input" name="search_key" id="search_key" type="text" placeholder="Pencarian...">
							</form>
							<button class="uk-button uk-button-default" id="resetBtn"><span uk-icon="refresh"></span></button>
						</div>
						<div class="tambah uk-float-left">
							<button class="uk-button uk-button-danger uk-margin-small-right" id="tambahmodal" type="button"><span uk-icon="icon: plus"></span>
								<span class="uk-visible@s">Tambah Data</span></button>
						</div>
					</div>
					<div id="ajaxpertanian">

						<!-- Loading Image -->
						<div class="loading" style="display: none;">
							<div class="contentloading"><img src="<?php echo base_url('public/img/loading.gif'); ?>" /></div>
						</div>
						<!-- Loading Image -->
					</div>
				</div>
			</div>

			<!-- form simpan dan edit -->
			<div class="uk-container uk-container-large" id="formsimpandaneditpertanian">
				<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
					<form class="uk-form-stacked" id="submitdata" method="post">
						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Kecamatan Pertanian</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="idpertanian" name="idpertanian" type="hidden">
								<input class="uk-input" id="kecamatanpertanian" name="kecamatanpertanian" type="text" placeholder="Kecamatan Pertanian">
							</div>
						</div>

						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Lokasi Pemetaan</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="lokasipertanian" name="lokasipertanian" type="text" placeholder="Lokasi Pertanian">
							</div>
						</div>


						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Keterangan Pemetaan</label>
							<div class="uk-form-controls">
								<textarea name="keteranganpertanian" id="keteranganpertanian" class="uk-textarea" placeholder="Isi Keterangan Pertanian "></textarea>

							</div>
						</div>

						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Latitude Pemetaan</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="latitudepertanian" name="latitudepertanian" type="text" placeholder="Latitude Pertanian">
							</div>
						</div>

						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Longitude Pemetaan</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="longitudepertanian" name="longitudepertanian" type="text" placeholder="Longitude Pertanian">
							</div>
						</div>



						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Kategori Pemetaan</label>
							<div class="uk-form-controls">
								<select class="uk-select" name="kategori" id="kategori">
									<option value="0">-- Pilih Kategori Pemetaan --</option>
									<option value="sawah">Pertanian Padi</option>
									<option value="kebun kopi">Pertanian Kopi</option>
									<option value="kebun teh">Pertanian Teh</option>
									<option value="kebun sawit">Pertanian Sawit</option>
									<option value="kebun kelapa">Pertanian Kelapa</option>
									<option value="kebun cabai">Pertanian Cabai</option>
									<option value="kebun pisang">Pertanian Pisang</option>
									<option value="kebun tebu">Pertanian Tebu</option>
								</select>
							</div>
						</div>




						<div class="uk-modal-footer uk-text-right">
							<button class="uk-button uk-button-default uk-modal-close" id="kembalikeawal" type="button">Kembali</button>
							<button class="uk-button uk-button-primary" type="submit" id="simpandata">Simpan Data</button>
						</div>
					</form>
				</div>
			</div> <!-- Form -->
		</div>
	</div>






	<script src="<?= base_url('public/') ?>admin/pertanian.js"></script>
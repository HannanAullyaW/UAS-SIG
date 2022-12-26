<div class="content-padder content-background">
    <div class="uk-section-small uk-section-default header">
        <div class="uk-container uk-container-large">
            <h2><span class="ion-speedometer"></span> Beranda</h2>
            <p>
                Selamat Datang, <?= $this->session->userdata('nama') ?>, <?= $judul ?>
            </p>
        </div>
    </div>
    <div class="uk-section-small">
        <div class="uk-container uk-container-large">
            <div id="mapid"></div>
        </div>
    </div>


    <script type="text/javascript">
        var data = [
            <?php
            foreach ($pertanian as $key => $r) { ?> {
                    "lokasi": [<?= $r->latitudepertanian ?>, <?= $r->longitudepertanian ?>],
                    "kecamatan": "<?= $r->kecamatanpertanian ?>",
                    "keterangan": "<?= $r->keteranganpertanian ?>",
                    "tempat": "<?= $r->lokasipertanian ?>",
                    "kategori": "<?= $r->kategoripertanian ?>"
                },
            <?php } ?>
        ];

        var map = new L.Map('mapid', {
            zoom: 10,
            center: new L.latLng(-0.789275, 113.921327)
        });
        map.addLayer(new L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
        }));

        var markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);

        var controlSearch = new L.Control.Search({
            position: 'topleft',
            layer: markersLayer,
            initial: false,
            zoom: 25,
            marker: false
        });

        map.addControl(new L.Control.Search({

            layer: markersLayer,
            initial: false,
            collapsed: true,
        }));

        var padi = L.icon({
            iconUrl: '<?= base_url('public/icon/padi.png') ?>',
            iconSize: [30, 30]
        });

        var kopi = L.icon({
            iconUrl: '<?= base_url('public/icon/kopi.png') ?>',
            iconSize: [30, 30]
        });

        var teh = L.icon({
            iconUrl: '<?= base_url('public/icon/teh.png') ?>',
            iconSize: [30, 30]
        });

        var sawit = L.icon({
            iconUrl: '<?= base_url('public/icon/sawit.png') ?>',
            iconSize: [30, 30]
        });

        var kelapa = L.icon({
            iconUrl: '<?= base_url('public/icon/kelapa.png') ?>',
            iconSize: [30, 30]
        });

        var cabai = L.icon({
            iconUrl: '<?= base_url('public/icon/cabai.png') ?>',
            iconSize: [30, 30]
        });

        var pisang = L.icon({
            iconUrl: '<?= base_url('public/icon/pisang.png') ?>',
            iconSize: [30, 30]
        });

        var tebu = L.icon({
            iconUrl: '<?= base_url('public/icon/tebu.png') ?>',
            iconSize: [30, 30]
        });

        var icons = "";
        for (i in data) {
            var kecamatan = data[i].kecamatan;
            var lokasi = data[i].lokasi;
            var tempat = data[i].tempat;
            var keterangan = data[i].keterangan;
            var kategori = data[i].kategori;

            if (kategori == "kebun cabai") {
                icons = kopi;
            } else if (kategori == "sawah") {
                icons = padi;
            } else if (kategori == "kebun kopi") {
                icons = tebu;

            } else if (kategori == "kebun teh") {
                icons = teh;

            } else if (kategori == "kebun sawit") {
                icons = sawit;

            } else if (kategori == "kebun kelapa") {
                icons = kelapa;
            } else if (kategori == "kebun pisang") {
                icons = cabai;
            } else if (kategori == "kebun tebu") {
                icons = pisang;
            }

            var marker = new L.Marker(new L.latLng(lokasi), {
                title: kecamatan,
                icon: icons
            });
            marker.bindPopup('<b>Kecamatan: ' + kecamatan + ' <br> Lokasi: ' + tempat + '<br> Keterangan: ' + keterangan + '</b>');
            markersLayer.addLayer(marker);
        }
    </script>
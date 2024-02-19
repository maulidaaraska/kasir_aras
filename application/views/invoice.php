<body style="background-color: skyblue;">
    <section class="invoice">
        <div class="card">
            <div class="card-body">
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                            <i class="fa fa-opencart"></i>PureGlow
                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        dari
                        <address>
                            <strong> PureGlow </strong> <br>
                            Jl. Sudirman No. 19 Jakarta, Indonesia<br>
                            Phone : 089652918547<br>
                            Email : maulidaaraska@gmail.com
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        To
                        <address>
                            <strong><?= $penjualan->nama; ?></strong><br>
                            <?= $penjualan->alamat; ?> <br>
                            Contact Person : <?= $penjualan->telp; ?><br>
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <b>Nomor Nota #<?= $nota ?></b><b>
                            <!-- /.col -->
                    </div>
                    <!-- /.col -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Produk</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php $total = 0;
                                    $no = 1;
                                    foreach ($detail as $row) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $row['kode_produk'] ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['jumlah'] ?></td>
                                            <td>Rp. <?= number_format($row['harga']) ?></td>
                                            <td>Rp. <?= number_format($row['jumlah'] * $row['harga']) ?></td>
                                        </tr>
                                    <?php $total = $total + $row['jumlah'] * $row['harga'];
                                        $no++;
                                    } ?>
                                    <tr>
                                        <td colspan=5>Total Harga</td>
                                        <td>Rp. <?= number_format($total); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <a href="<?= base_url('penjualan/generate_pdf/' . $nota) ?>" class="btn btn-danger pull-right" target="_blank"><i class="fa fa-credit-card"></i> Cetak Nota PDF
                            </a>
                            <button onclick="window.print()" class="btn btn-success shadow float-right">Print <i class="fa fa-print"></i></button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </body>
<?php 
require_once '../dbkoneksi.php';
?>

<?php 
    // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        // ambil data pembelian berdasarkan id
        $sql = "SELECT * FROM pembelian WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // jika tidak ada parameter id pada URL, maka dianggap input data baru
        // inisialisasi variabel $row sebagai array kosong
        $row = [];
    }
?>

<form method="POST" action="proses_pembelian.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="tanggal" type="date" class="form-control" 
        value="<?php if(isset($row['tanggal'])) echo $row['tanggal']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="" name="nomor" 
        value="<?php if(isset($row['nomor'])) echo $row['nomor']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Produk id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="produk_id" value="<?php if(isset($row['produk_id'])) echo $row['produk_id']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="jumlah" value="<?php if(isset($row['jumlah'])) echo $row['jumlah']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="harga" value="<?php if(isset($row['harga'])) echo $row['harga']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Vendor id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="vendor_id" value="<?php if(isset($row['vendor_id'])) echo $row['vendor_id']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <?php
        $button = (empty($_id)) ? "Simpan":"Update"; 
    ?>
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="<?=$button?>"/>
      <input type="hidden" name="id" value="<?=$_id?>"/>
    </div>
  </div>
</form>
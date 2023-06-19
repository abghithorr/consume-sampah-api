<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Data Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
      <div class="d-flex justify-content-center align-items-center container my-4">
          <div class="card my-2" style="border-radius:6% 2%">
            <div class="container">
            <form action="/sampah/store" method="post" style="width:450px;">
            @csrf
            <legend class="text-center mb-4 mt-2">TAMBAH DATA SAMPAH</legend>
          <div class="mb-3">
            <label class="form-label">Kepala Keluarga</label>
            <input type="text" id=""  name="kepala_keluarga" class="form-control" placeholder="Kepala Keluarga">
          </div>
          <div class="mb-3">
            <label class="form-label">No Rumah</label>
            <input type="number" id="" name="no_rumah" class="form-control" placeholder="No Rumah">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">RT/RW</label>
            <input type="text" id="" name="rt_rw" class="form-control" placeholder="Rt Rw">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Karung Sampah</label>
            <input type="number" id="" name="total_karung_sampah" class="form-control" placeholder="Masukan Karung Sampah">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Tanggal Pengangkutan</label>
            <input type="date" id="" name="tanggal_pengangkutan" class="form-control" placeholder="Tanggal Pengangkutan">
          </div>
          <a href="/" class="btn btn-secondary mb-3">Back</a>
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
      </form>
           </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
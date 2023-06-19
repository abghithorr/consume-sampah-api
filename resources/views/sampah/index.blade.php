<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data API Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"  rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

    <form action="" method="get">
        @csrf
                    <form class="" style="width:100px">
                        <div class="input-group">
                            <input class="form-control" name="search" type="text" placeholder="Search for..."
                                aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn" id="btnNavbarSearch" type="submit"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>



    </form>
    <br>

    <div class="container my-5">
        <a href="/sampah/create" class="btn btn-info mb-3">Create</a>
        <a href="/show/trash" class="btn btn-success mb-3">Trash</a>
        <table class="table table-bordered table-info my-4">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Kepala Keluarga</th>
                    <th>No Rumah</th> 
                    <th>RT/RW</th>
                    <th>Karung Sampah</th>
                    <th>Kriteria</th>
                    <th>Tanggal Pengangkutan</th>
                    <th>Setting</th>
                </tr>
            </thead>
            <tbody>
            @foreach($sampah as $item)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$item['kepala_keluarga']}}</td>
                    <td>{{$item['no_rumah']}}</td>
                    <td>{{$item['rt_rw']}}</td>
                    <td>{{$item['total_karung_sampah']}}</td>
                    <td>{{$item['kriteria']}}</td>
                    <td>{{$item['tanggal_pengangkutan']}}</td>
                    <td>
                        <form action="/sampah/delete/{{$item ['id']}}" method="post">
                            <a href="/sampah/{{$item['id']}}" class="btn btn-primary bi bi-eye-slash"></a> |
                            <a href="/sampah/edit/{{$item['id']}}" class="btn btn-warning bi bi-clipboard-plus"></a> | 
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger bi bi-x-octagon"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
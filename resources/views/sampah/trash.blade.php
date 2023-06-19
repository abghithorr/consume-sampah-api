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
    <div class="container my-5">
        <a href="/" class="btn btn-info mb-3 float-end">Back</a>
        @if (session('danger'))
                    <div class="alert alert-danger text-center">
                        {{ session('danger')}}
                    </div>
                @endif
        <table class="table table-bordered table-info my-4">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Kepala Keluarga</th>
                    <th class="text-center">No Rumah</th> 
                    <th class="text-center">RT/RW</th>
                    <th class="text-center">Karung Sampah</th>
                    <th class="text-center">Kriteria</th>
                    <th class="text-center">Tanggal Pengangkutan</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($sampah as $item)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td class="text-center">{{$item['kepala_keluarga']}}</td>
                    <td class="text-center">{{$item['no_rumah']}}</td>
                    <td class="text-center">{{$item['rt_rw']}}</td>
                    <td class="text-center">{{$item['total_karung_sampah']}}</td>
                    <td class="text-center">{{$item['kriteria']}}</td>
                    <td class="text-center">{{$item['tanggal_pengangkutan']}}</td>
                    <td>
                        <form action="{{route ('restore', $item['id'])}}" class="text-center" method="">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-primary">Restore</button>
                            <a href="{{route ('permanent', $item['id'])}}" class="btn btn-danger">Permanent</a>
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
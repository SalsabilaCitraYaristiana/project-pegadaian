<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Pegadaian</title>
</head>
<body>
    <h2 style="text-align: center; margin-bottom: 20px">Data Keseluruhan Pegadaian</h2>
    <table style="width: 100%">
        <tr>
            <th width="5%">No</th>
            <th>Name</th>
            <th>Email</th>
            <th>NIK</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Item</th>
            <th>Photo</th>
            <th>Status Response</th>
            <th>Pesan Response</th>
        </tr>
        @php
            $no = 1; 
        @endphp
        @foreach ($reports as $report)

        <tr>
            <td>{{$no++}}</td>
            <td>{{$report['name']}}</td>
            <td>{{$report['email']}}</td>
            <td>{{$report['nik']}}</td>
            <td>{{$report['age']}}</td>
            <td>{{$report['no_telp']}}</td>
            <td>{{$report['item']}}</td>
            <td>{{\Carbon\Carbon::parse($report['created_at'])->format('j F, Y')}}</td>
            {{-- <td>{{$report['']}}</td> --}}
            <td><img src="assets/image/{{$report['foto']}}" width="80"></td>
            <td>
                {{-- cek apakah data report ini sudah memiliki relasi dengan data dr with('response')--}}
                @if ($report['response'])
                {{-- kalau ada hasil relasinya, tampilkan bagian status --}}
                    {{ $report['response']['status'] }}
                @else 
                {{-- kalau ga ada tampilkan tanda ini --}}
                    -
                @endif
            </td>
            <td>
                {{-- cek apakah data report ini sudah memiliki relasi dengan data dr with('response')--}}
                @if ($report['response'])
                {{-- kalau ada hasil relasinya, tampilkan bagian pesan --}}
                    {{ $report['response']['pesan'] }}
                @else 
                {{-- kalau ga ada tampilkan tanda ini --}}
                    -
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
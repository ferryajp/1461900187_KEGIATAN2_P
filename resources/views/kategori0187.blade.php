<head>
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x: auto">
    <table> 
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori id</th>
                <th>Kategori nama</th>

            </tr>
        </thead>
    <t.body>
    <?php $no=1 ?>\
    @foreach ($kategori as $Kategori)
                  <tr>
                      <td>{{ $Kategori->kategori_id }}</td>
                      <td>{{ $Kategori->kategori_nama }}</td>
                      

                      <td><a href="#">Edit</a> | 
                          <a href="#">Hapus</a>
                      </td>
                  </tr>
                @endforeach
    <t.body>
    </table>
  </div>
  <body> 

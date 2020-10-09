
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
		body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            /* border-collapse:collapse; */
            margin:0 auto;
            width:100px;
        }
        td, tr, th{
            padding:10px;
            border:1px solid #333;
            width:100px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
		img {
			padding:12px;
			padding-left:35%;

            width:185px;
		}
        * {
  box-sizing: border-box;
}

.header {
  border: 1px solid red;
  padding: 15px;
}

.row::after {
  content: "";
  clear: both;
  /* display: table; */
}

[class*="col-"] {
  float: left;
  /* padding: 0.5px; */
  /* border: 1px solid; */
}

.col-1 {width: 8.33%;}
.col-2 {width: 12%;}
.col-3 {width: 25%;}
.col-4 {width: 36%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

.sembunyi{
    opacity: 0;
}

.center {
  margin: auto;
  width: 50%;
  /* border: 3px solid green; */
  padding: 10px;
}
    </style>





</head>
<body>



    <div class="content mt-3">

        <div class="animated fadeIn">
    <div class="center">

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="pro" method="get">
      <input name="find" type="text" placeholder="cari nama ">
      <button type="submit" class="btn btn-success">cari</button>
    </form>
    </div>
           
           
            <div class="card ">
                
                <div class="card-header  center">
                    <div class="pull-left">
                        <strong >Produk</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{url('pro/add')}}" class="">
                          <i class=""> Add</i>
                        </a>
                    </div>
                </div>
                <div class="card-body ">
    
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>kode</th>
                                <th>Nama</th>
                                <th>harga</th>
                                <th>stok</th>
                                <th>kategori</th>
                                <th> 
                                    <div class="row">
                                        <div class="col"><form action="pro" method="get">
                                            <input class="sembunyi" name="up" type="text" value="up">
                                          <button type="submit" class="">A</button>
                                        </form></div>
                                        <div class="col"><form action="pro" method="get">
                                            <input class="sembunyi" name="down" type="text" value="down">
                                          <button type="submit" class="">Z</button>
                                        </form></div>
                                    </div>
                                    
                                    
 
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $item)
                            <tr>
                                 <td>{{ $loop->iteration }}</td>
                                 <td>{{$item->kode}}</td>
                                 <td>{{$item->nama}}</td>
                                 <td>{{$item->harga}}</td>
                                 <td>{{$item->stok}}</td>
                                 <td>{{$item->kategori}}</td>
                                 <td>
                                  <a href="{{url('produk/edit/'.$item->id)}}" class=""> 
                                    <i class=""> </i> edit
                                </a>
                                <form action="{{url('produk/'.$item->id)}}" method="post" class="" onsubmit="return confirm('yakin hapus data')">
                                    @method('delete')
                                    @csrf
                                    <button class="" >hapus
                                    </button>
                                    </form>
                                </td>
                             </tr>
                            @endforeach
                        </tbody>
                     </table>
                     <div class="center">  <div class="">
                        Showing
                        {{ $produk->firstitem()}}
                        to
                        {{ $produk->lastitem()}}
                        of
                        {{$produk->total()}}
                        entried
    
                    </div>
                    <div class="">{{ $produk->links() }}</div></div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>


 


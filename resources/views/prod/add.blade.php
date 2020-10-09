
<div class="content mt-3">

    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>tambah produk</strong>
                </div>
                <div class="pull-right">
                    <a href="{{url('/pro')}}" class="btn btn-success btn-sm">
                      <i class="fa fa-pluss"> back</i>
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-md-4 offset-md-4">
                        <form action="{{url('/pro/addProcess')}}" method="POST">
                            <div class="from-groub">
                                @csrf
                                <label>kode  </label>
                            <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{Old('kode')}}" autofocus >
                                @error('kode')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="from-groub">
                            
                                <label>Nama  </label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{Old('nama')}}" autofocus >
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            

                            <div class="from-groub">
                                <label>stok</label>
                            <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror" value="{{Old('stok')}}" autofocus >
                                @error('stok')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="from-groub">
                            
                                <label>harga </label>
                            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{Old('harga')}}" autofocus >
                                @error('harga')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>


                            <div class="from-groub">
                                <label>kategori</label>
                                <input type="text" name="kategori" class="form-control  @error('kategori') is-invalid @enderror" autofocus value="{{ Old('kategori')}}" >
                                @error('kategori')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            

                            <button type="submit" class="btn btn-success">save</button>
                        </form>
                    </div>
                </div>

         
            </div>
        </div>
    </div>
</div>
    




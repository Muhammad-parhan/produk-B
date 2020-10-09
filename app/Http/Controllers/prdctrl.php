<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class prdctrl extends Controller
{
   public function tampil(Request $request){

    if($request->has("up")){
    
            if($request->has("cari")){
        
            $produk = DB::table("prds")->where("nama","like","%".$request->cari."%")->orderBy('nama','asc')->paginate(2);
            return view("prod.tampil",['produk'=>$produk]);


            }else{
            $produk = DB::table("prds")->orderBy('nama','asc')->paginate(2);
            return view("prod.tampil",['produk'=>$produk]);
            }
        }else if($request->has("down")){
            if($request->has("cari")){
        
                $produk = DB::table("prds")->where("nama","like","%".$request->cari."%")->orderBy('nama','desc')->paginate(2);
                return view("prod.tampil",['produk'=>$produk]);
    
    
                }else{
                $produk = DB::table("prds")->orderBy('nama','desc')->paginate(2);
                return view("prod.tampil",['produk'=>$produk]);
                }


            
        }else if($request->has("find")){
            $produk = DB::table("prds")->where("nama","like","%".$request->find."%")->paginate(2);
            return view("prod.tampil",['produk'=>$produk]);
        }else{

            $produk = DB::table("prds")->paginate(2);
            return view("prod.tampil",['produk'=>$produk]);
        }

 }

   public function add(){

       

    $produk = DB::table('prds')->get();
    
    return view('prod.add', ['produk' => $produk]);

    
}

public function addProcess(Request $request){

    $validatedData = $request->validate([
        'nama' => 'required|min:2',
        'kode' => 'required',
    ],['nama.required'=> 'nama jenjang harus di isi']);

    DB::table('prds')->insert(
        [
            'nama' => $request->nama
            ,'kode' => $request->kode
            ,'stok' => $request->stok
            ,'harga' => $request->harga 
            ,'kategori'=> $request->kategori

        ]
    );
    return redirect('pro')->with('status', 'produk berhasil di tambahkan!');
    //return $request;

    
}

public function edit($id){

    $produk = DB::table('prds')->where('id', $id)->first();
    return view('prod.edit',compact ('produk'));


}

public function editProcess($id,Request $request){

    $validatedData = $request->validate([
        'nama' => 'required|min:2',
        'kode' => 'required',
    ],['nama.required'=> 'nama produk harus di isi']);

    DB::table('prds')->where('id', $id)->update(
        [
            'nama' => $request->nama
            ,'kode' => $request->kode
            ,'stok' => $request->stok
            ,'harga' => $request->harga 
            ,'kategori'=> $request->kategori

        ]
    );
    return redirect('pro')->with('status', 'produk berhasil di ubah!');
    //return $request;
    
}

public function delete($id){

    $produk = DB::table('prds')->where('id', $id)->delete();
    return redirect('pro')->with('status', 'produk berhasil di hapus!');
    
}


}

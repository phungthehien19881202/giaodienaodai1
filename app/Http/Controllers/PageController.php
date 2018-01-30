<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\ProductType;
use App\Slide;
class PageController extends Controller
{
    public function getIndex(){
    	// $user = ProductType::all();
    	// print_r( $user);
    	$slide = Slide::all();
      print_r($slide);
      exit;
    	// cách 1 return view('page.trangchu',['slide'=>$slide]);
      return view('page.trangchu',compact('slide'));
    }

   public function getLoaiSp(){
   		return view('page.loaisanpham');
   }

   public function getChiTietSp(){
   		return view('page.chitiet_sanpham');
   }
   public function getLienHe(){
   		return view('page.lienhe');
   }
   public function getTinTuc(){
   		return view('page.tintuc');
   }
   public function getTinChiTiet(){
   		return view('page.tinchitiet');
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listitems;
class listController extends Controller
{
    public function index(){
        return view('welcome',['Listitems'=>listitems::where('is_complete',0)->get()]);
    }
 
public function saveItem(Request $request){
   $newListitems=new Listitems;
   $newListitems->name=$request->listitem;
   $newListitems->is_complete=0;
   $newListitems->save();


return redirect('/');
}
public function complete($id){

$Listitems=Listitems::find($id);
$Listitems->is_complete=1;
$Listitems->save();
return redirect('/');
}

}





//->back()->with('message','New item created! ');


//\Log::info($id);


 /* public function saveItem1(Request $request){

    $data= new listitems;
    $data->name=$request->name;
    $data->is_complete=0;
    $data->save();
  return redirect('/');
}*/

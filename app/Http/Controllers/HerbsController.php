<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Herbs;


class HerbsController extends Controller
{
    public function index(){

        $allHerbs = Herbs::paginate(4);
        return view('herbs.index',['herbs' => $allHerbs]);
        
    }

    public function show($id){

        $herbItem = Herbs::where('id',$id)->get();

        return view('herbs.show', ['thisherbItem' => $herbItem]);

    }

    public function create(){
        return view('herbs.create');

    }

    public function store(Request $request){
        $newHerb = new Herbs();
        $request->validate([
            'herbName' => 'required',
            'region'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,gif,svg|max:5055',
            'synopsis'=> 'required',
            'rating'=> 'required',
            'region'=> 'required',

        ]);

        //$input = $request->all();

        if($image = $request->file('image')){
            $path = public_path('img/');
            $theImage = date('YmdHis').".".$image->getClientOriginalExtension();
            if($newImage = $image->move($path, $theImage)){


                $newHerb->img_url = $theImage;
                $newHerb->name = request('herbName');
                $newHerb->continent = request('region');
                $newHerb->synopsis = request('synopsis');
                $newHerb->rating = request('rating');

                $newHerb->save();
            }
        }

            return redirect('/')->with('msg','Thanks for adding an article');  
        
    }


    public function destroy($id){
        $herbToDestroy = Herbs::where('id',$id)->get();

        //return $herbToDestroy ;
        $herbToDestroy->each->delete();

        return redirect("/herbs");

    }
}

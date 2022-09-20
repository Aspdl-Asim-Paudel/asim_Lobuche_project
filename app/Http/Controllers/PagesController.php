<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//
//class PagesController extends Controller
//{
//  public function home()
//    {
//        $data=[
//          'name'=>'Noiro',
//          'age'=>'Immortal'
//        ];
//        return view('welcome')->with($data);
//    }
//    public function profile() {
//      return view('profile');
//    }
//    public function create() {
//        return view('create');
//    }
//    public function request() {
//        return $request;
//    }
//    public function request() {
//        return $request;
//    }
//
//}

namespace App\Http\Controllers;

use App\Models\calendar;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PagesController extends Controller
{
    public function home()
    {
        $data = ['name' => 'Asim', 'age' => 18];
        return view('welcome')->with($data);
    }

    public function profile()
    {
        $data1 = ['username' => 'Asim'];
        return view('profile')->with($data1);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new calendar();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->dob = $request->dob;

        $img = Image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $img->save('storage/image/' . $filename);
        $student->image = $filename;

        $student->save();
        return redirect('/list');
    }

    public function list()
    {
        $student = calendar::get();
        return view('list')->with('student', $student);

    }

    public function edit($id)
    {
//        $student = calendar::where('id'.$id)->get();

        //        jun use gar pani huncha
        $student = calendar::find($id);

        return view('update')->with('student', $student);
    }

    public function update(Request $request)
    {
//$student = calendar::where('id'.'='.$id)->first();

        $student = calendar::find($request->id);
        $student->name = $request->name;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->dob = $request->dob;
        $student->save();
        return redirect('/list');
    }
}



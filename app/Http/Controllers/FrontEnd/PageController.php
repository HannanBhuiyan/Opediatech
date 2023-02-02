<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Contact;

class PageController extends Controller
{
    public function WorkPageIndex()
    {
        return view('layouts.frontend.pages.work');
    }


    public function ServicePageIndex()
    {
        return view('layouts.frontend.pages.service');
    }


    public function AgencyPageIndex()
    {
        return view('layouts.frontend.pages.agency');
    }


    public function CareerIndexPage()
    {
        return view('layouts.frontend.pages.career');
    }

    public function BlogIndexPage()
    {
        return view('layouts.frontend.pages.blog');
    }
 
    
    public function contactPageIndex(){
        return view('layouts.frontend.pages.contact');
    }
    public function contactStore(Request $request){
        
        Contact::insert([
                'fname'=> $request->fname,
                'email'=> $request->email,
                'message'=> $request->message,
                'created_at'=>Carbon::now()
            ]);
            return back()->with('success', 'Your message is submitted succesfully!');;
    }


}

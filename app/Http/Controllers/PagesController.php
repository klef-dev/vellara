<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome to Vellara Inc.";
        // return view("pages.index", compact('title'));
        return view("pages.index")->with("title", $title);
    }

    public function about() {
        $title = "About Vellara";
        return view("pages.about")->with("title", $title);
    }

    public function services() {
        $data = [
            "title" => "Services",
            "services" => [
                "Web Development",
                "Mobile Development",
                "SEO"
            ]
        ];
        return view("pages.services")->with($data);
    }
}

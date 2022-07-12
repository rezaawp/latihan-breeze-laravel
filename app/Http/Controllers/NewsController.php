<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewsController extends Controller
{

    public function about()
    {
        $data = News::all();
        return Inertia::render('About', ['news' => $data]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Inertia::render('Home', ['news' => $this->getNewsAll()]);
    }

    public function getNewsAll()
    {
        return News::all();
    }

    public function getNewsAPI()
    {
        $news = News::all();
        return response()->json($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->title == "" && $request->description == "" && $request->author == "")
        {
            return "Semua kolom harus di isi";
        }

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id ,News $news)
    {
        //
        $data = News::find($id);
        return Inertia::render('Home', ['news' => $data, 'edit' => 'true']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, News $news)
    {
        //
        $data = News::find($id);
        $data->delete();

        return redirect()->back();
    }
}

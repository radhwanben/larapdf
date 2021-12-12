<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        /**
         * validate input from client side then display error message with sweetalert
         */

        $validator= Validator::make($request->all(), [
            
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        /**
         * try to create new record in the database if it fails redirect user to the same page with error message sweetalert
         * if the record Created successfully! redirect user to articles page with success sweetalert message
         **/

        try
        {
            $article = Article::create($request->all());

            return redirect()->route('articles.index') ->with('success', 'Created successfully!');
        }
        catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
      

        return view('articles.show' ,compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        try
        {
           
            $article->update($request->all());

            return redirect()->route('articles.index') ->with('success', 'Product updated successfully');
        }
        catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}

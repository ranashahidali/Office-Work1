<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/tempelate', function () {
    return view('tempelate');
});

// Route::get('/post1',function (){
//     return view('post');

// });

                // 2ND method to create route
//    Route ::get('/post',function(){
//      return '<h1>Post</h1>';
//    });


               // 3rd method to create route
       
        // Route ::view('post','/post');



        // Lecture : 6
        // Router with parameters

        // Route::get('/post{id}',function(string $id){
        //     return "<h1>Post Id is=".$id . "</h1>";
        // });


        // Route with condition use

        // Route::get('/post/{id?}/{commentid?}',function(string $id = null, string $comment=null){
        //     if($id){
        //         return "<h1>Post Id is=".$id . "</h1><h2>The comment is=".$comment."</h2>";

        //     }
        //     else{
        //         return 'not found';
        //     }
            
        // });



        //    Route: topic constraint 

        // Route::get('/post/{id}',function(string $id = null){
        //     if($id){
        //         return "<h1>Post Id is=".$id . "</h1>";

        //     }
        //     else{
        //         return 'not found';
        //     }
        // });        
        
        
           //    Route: who to use multiple values constraint 

        //    Route::get('/post/{id}/comment/{commentid}',function(string $id,string $commentid){
        //     if($id){
        //         return "<h1>Post Id is=".$id . "& comment:".$commentid. "</h1>";

        //     }
        //     else{
        //         return 'Id Not Found';
        //     }
        // })->where('id','[0-9]+')->whereAlpha('commentid','[a-zA-Z]');    
       
        /*->where('id','[a-zA-Z]+'); */
        
        /*->whereIn('id',['song','movies']);*/
       /*->whereAlphaNumeric('id');*/



    
    
                   //   Lecture : 7
        
    //   Topic Laraval Name Route And Routes Group

    // Route :: get('/test1',function(){
    //     return view('about');

    // });

    // if user enter old name url show same resulut but new name

    // Route:: redirect('about','test1');

    // Route :: get('page/postss',function(){
    //     return view('post');

    // })->name('mypost');



    // Topic: Laraval Group

    Route::prefix('page')->group(function(){
        Route::get('/about',function(){
            return '<h1>About Page<h1>';

        });

        Route::get('/gallery',function(){
            return '<h1>Gallery Page<h1>';

        });

        Route :: get('/post/firstpost',function(){
            return '<h1>First Post Page</h1>';
            
        });
        
    });

    
    // if uder enter wrong route then you can display this message with the help of this code

    Route::fallback(function(){
        return "<h1>Page not found<h1>";
    });



  


   
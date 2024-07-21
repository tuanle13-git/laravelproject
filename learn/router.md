1. Route
<br>
1.1 cú pháp đơn giản 
<br>
<hr>
Route::{method}('{url}',{function or ['{controllername}::class','{method name}']})
<br>
Ví dụ 1: <br>Route::get('/helloworld', function(){ <br>
    return 'hello, world'; <br>
})<br>
<img src="image/image.png" alt="">
<br>
<br>
Ví dụ 2: Route::get('/1.2',[TestController::class,'index']);<br> 
<br>

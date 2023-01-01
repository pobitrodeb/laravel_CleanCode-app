<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>clean code </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <section class="py-5">
        <div class="container">
           <div class="card">
            <div class="card-header bg-success text-white">Add New Product </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                        <x-forms.name :title=" 'Product Name' " :type=" 'text' " :name=" 'name' " :placeholder=" 'Enter your Product Name' "/>
                        <x-forms.price :title=" 'Product Price' " :type=" 'number' " :name=" 'price' " :placeholder=" 'Enter your Product Price' "/>
                </form>
            </div>
           </div>
        </div>
   </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

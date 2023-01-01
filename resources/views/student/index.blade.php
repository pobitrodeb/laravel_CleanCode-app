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
            <a href="{{ route('home') }}" class="btn btn-success mx-2 my-2"> Home  </a>
            <a href="{{ route('product.home') }}" class="btn btn-success mx-2 my-2"> Add Product  </a>

           <div class="card">
            <div class="card-header bg-success text-white">Add New Student </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-forms.name :title=" 'Student Name' " :type=" 'text' " :name=" 'stuedent_name' " :placeholder=" 'Enter Student Name' "/>
                    <x-forms.name :title=" 'Student Email' " :type=" 'email' " :name=" 'stuedent_email' " :placeholder=" 'Enter Student Email' "/>
                    <x-forms.name :title=" 'Student Password' " :type=" 'password' " :name=" 'stuedent_password' " :placeholder=" 'Enter Student Password' "/>
                    <x-forms.submit_button :title=" 'Create New Student' " :type=" 'submit' "/>
                </form>
            </div>
           </div>
        </div>
   </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

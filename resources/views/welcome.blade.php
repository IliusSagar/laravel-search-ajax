<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

  </head>
  <body>

   <div class="container mt-5">
    <div class="col-md-3">
        <div class="search-bar">

            <form action="{{ url('searchproduct')}}" method="POST">
                @csrf
                <div class="input-group mb-3"> 
                    <input type="search" class="form-control" id="search_product" name="name" placeholder="Search Products" >
                    <button type="submit" class="input-group-text" ><i class="fa fa-search"></i></button>
                  </div>
            </form>

        </div>
    </div>
   </div>
      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        $( function() {

          var availableTags = [];
          $.ajax({
            method: "GET",
            url: "/product-list",
            // data: "data",
            // dataType: "dataType",
            success: function(response){
                console.log(response);
                startAutoComplete(response);
            }
          });

          function startAutoComplete(availableTags){
            $( "#search_product" ).autocomplete({
            source: availableTags
          });
          }

          

        });
        </script>

    {{-- <script>
        $( function() {
          var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
          ];
          $( "#search_product" ).autocomplete({
            source: availableTags
          });
        } );
        </script> --}}


  </body>
</html>
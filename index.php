<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <script src="jquery.js"></script>

    <title>JSON</title>
</head>

<body>
    <section>

    <!-- <script>
        $.getJSON('list.json',function(data){
            $.each(data,function (index,valeur){
//            alert(JSON.stringify(data));

                $('#zone').append('<p>'+(JSON.stringify(index))+' <br/>'+(JSON.stringify(valeur))+' <br/>'+'</p>');
         });
    });
        </script> -->

        <h1> Bibliothèque </h1>
             <section class="json">
                 <input id="book" type="button" value="Voir la liste">

            <script>
            $('#book').on('click', function(){
                $.getJSON('list.json',function(data){
                    $.each(data.books,function(index,valeur){
                    $('#zone').append('<p><b>'
                    +'ISBN : ' +valeur.ISBN+ '</b><br/>'
                    +'Titre : ' +valeur.title+ '</b><br/>'
                    +'Auteur : ' +valeur.author+ '</b><br/>'
                    +'Illustrateur : ' +valeur.illustrator+ '</b><br/>'
                    +'Année : ' +valeur.year+ '</b><br/>'
                    +'Genre : ' +valeur.genre+ '</b><br/>'
                    +'Age : ' +valeur.age+ '</b><br/>'
                    +'Couverture : <br/><img src= "'+valeur.cover+'" class="image" /></b><br/>'
                    +'Description : ' +valeur.description+ '</b><br/><br/></p>'
                      );
                      });
                    });
                  });
               </script>


               <!-- <script src="list.json" type="text/javascript">
                   $.getJSON('list.json',function(data){
                  var data= new Array("books","users","admin");
                  // var data= new Array("books","users","admin");

                  for (var i=0; i< data.length; i++){
                    console.log(data[i]);
                    // alert(data[i]);
                  };
                });
                  </script> -->
  <button id="user" name="button">Liste des lecteurs</button>
  <ul id="zone"></ul>

    <script>
    $(function(){
      $('#user').on('click',function() {
//  ajax permet de relier plusieurs types de fichiers contrairement à getJSON
      $.ajax({
        dataType:'json',
        url:'list.json',
        type:'get',
      success:function(data){
        $.each(data.users,function(key,val){
        $('#zone').append('<li><b>' +val.lastname +'</b> : '+ val.firstname +'</li>');
        });
      },
      error:function(){
        $('#zone').html('ERROR');
      }
        });
      });
    });
    </script>


    <h1> TABLEAU Javascript </h1> <!-- <section class="json"> -->
              <section class="json">                      <!-- <input id="lecture" type="button" value="SHOW LIST"> -->
                <input id="toto" type="button" value="Voir la liste">
             <ul id="admin"> </ul>

              <script> //javascript

                $('#toto').on('click', function(){
                  $.getJSON('list.json',function(data){
                    for (var i=0;i<data.admin.length;i++){
                      $("#admin").append('<p>'+data.admin[i].firstname+'</p>');
                    };
                  });
              });
                </script>




               <!-- <p id="zone"> </p> -->
             </section>
           </body>
           </html>

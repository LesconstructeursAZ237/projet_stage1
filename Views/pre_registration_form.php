<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page Acceuil </title>
    <link rel="stylesheet" href="./../Assets/Css/style.css">
    <script src="./../Assets/Js/nav.js" defer></script>
</head>
<body>
    <!-- star header -->
    <nav class="fixed w-full z-10 top-0 start-0 mb-1 opac" >

        <div class="p-4 flex justify-between flex-wrap">

            <img src="./../Assets/Images/logo2.jpg" class="h-full max-h-24 hover:bg-black rounded-lg p-1" alt=" logo">

            <span class="mt-8 text-justify">CENTRE DE FORMATION PROFESSIONNELLE LE LEADER EN INFORMATIQUE</span>

                <ul  class="font-medium flex flex-row text-justify mt-8 justify-between overflow-x-auto ">

                    <li class="  hover:bg-gray-200 rounded-lg  ">
                        <button> <a href="./index.php"class="text-sky-500 font-bold p-8">Acceuil</a></button>
                     </li>

                    <li class="  hover:bg-gray-200 rounded-lg  ">
                        <button> <a href="#"class="text-sky-500 font-bold p-8">Connexion</a></button>
                     </li>
                     
                    <li class="  hover:bg-gray-200 rounded-lg  ">
                        <a href="#"class="text-sky-500 font-bold p-8" >Deconnexion</a>
                    </li>

                </ul>
              
                    <button id="main_nav" class=" justify-between">
            
                         <span class="text-sky-400 font-bold  hover:bg-gray-500 rounded-lg p-4">
                             MENU
                        </span>

                    </button>

                    <div class="w-full hidden  overflow-x-auto" id="main_nav1">

                        <ul class=" font-medium flex flex-row justify-between ">

                            <li class="  hover:bg-gray-500 rounded-lg p-4">
                                <a href="#" class="text-sky-500 font-bold  ">FORMATIONS</a>
                            </li>

                            <li class="  hover:bg-gray-500 rounded-lg p-4">
                                <a href="#" class="text-sky-500 font-bold">EVENEMENTS</a>
                            </li>

                            <li class="  hover:bg-gray-500 rounded-lg p-4">
                                <a href="#"class="text-sky-500 font-bold">ETUDIANTS</a>
                            </li>

                            <li class="  hover:bg-gray-500 rounded-lg p-4">
                                <a href="#" class="text-sky-500 font-bold">ENSEIGNANTS</a>
                            </li>

                            <li class="  hover:bg-gray-500 rounded-lg p-4">
                                <a href="#" class="text-sky-500 font-bold">autre</a>
                            </li>

                        </ul>

                    </div>
        </div>
    </nav>
  <!-- ajout des images de font du debut, function js dans Assets/js/nav.js -->
    
    <div class=" flex float-none items-center justify-center h-screen col-start-2 col-span-4 overflow-hidden">

        <div id="slider" class=" bg-white p-4">
            
                <img src="./../Assets/Images/cotidiene3.jpg" alt="Image 1" class="w-full h-full object-contain hidden">

                <img src="./../Assets/Images/cotidiene2.jpg" alt="Image 1" class="w-full h-full object-contain hidden">
                     
                <img src="./../Assets/Images/aceuil3.jpg" alt="Image 1" class="w-full h-full object-contain hidden">
                   
                <img src="./../Assets/Images/acceuil4.jpg" alt="Image 1" class="w-full h-full object-contain hidden">
                <div class=" text-6xl absolute text-center top-1/2  capitalize font-serif text-white text-opacity-100">
                    devenez <br>leader <br> dans un domaine.
                </div>
          
            <button id="prev" class="absolute rounded-lg  left-4 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-2  hover:bg-sky-400">Previous</button>
            <button id="next" class=" absolute rounded-lg  right-4 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-2  hover:bg-sky-400">Next</button>
    
        </div>
        
    </div>
  
 <!-- space work start -->
        <!-- formulaire de pre-inscription // formulaire visiteur -->

            <div class="mt-8 mb-8 text-center shadow-xl rounded-lg m-auto max-w-xl  overflow-auto border border-gray-400">

                    <form action="./../Api/model/class_pre_register.php" class="" id="registration" method="post">
                        
                        <div class=" p-4 bg-gra-100 overflow-auto rounded-lg  m-auto" >
                            <h1 class=" text-2xl  m-2 capitalize  text-sky-500 font-bold"> formulaire d'inscription a une formation.</h1>

                            <label for="" class="text-black font-bold ">Nom: <br>
                                <input required  type="text" placeholder="Votre Nom Ici" id="name" name="name" class="font-normal rounded-md text-center h-10 w-4/5  placeholder-gray-400 border border-gray-400" > 
                            </label> <br>

                            <label for="" class="text-black font-bold ">Prénom: <br>
                                <input required  type="text" placeholder="Votre prénom Ici" id="first_name" name="first_name" class="font-normal rounded-md text-center h-10 w-4/5  placeholder-gray-400 border border-gray-400" > 
                            </label> <br>

                            <label for="" class="text-black font-bold ">Adresse Email: <br>
                                <input required type="email" placeholder="Votre Adresse Email ici" id="mail" name="mail" class="font-normal rounded-md text-center h-10 w-4/5  placeholder-gray-400 border border-gray-400" >
                            </label> <br> 

                            <label for="" class="text-black font-bold">Numero de telephone: <br>
                                    <div class="bg-sky-500 p-1 h-10 w-1/12 text-white font-bold
                                        rounded-md text-center float-left"> 
                                        +237
                                    </div>
                                <input required type="number" placeholder="Votre Numero de telephone: ex: 000111222" id="phone" name="phone" class="font-normal rounded-md text-center h-10 w-4/5  placeholder-gray-400 border border-gray-400" > 
                            </label> <br> 
                        
                           
                            
                            <!-- list of trainings , function js dans Assets/js/nav.js -->
                            <label for="" class="text-black font-bold ">Choisir au plus deux(02) formation:</label> <br>

                            <label>
                                <input type="checkbox" name="training_check[]" value="GP"> Graphisme de production (infographie)
                            </label><br>
                            <label>
                                <input type="checkbox" name="training_check[]" value="SB"> scretariat bureautique
                            </label><br>
                            <label>
                                <input type="checkbox" name="training_check[]" value="MAV"> montage audio-visuel
                            </label><br>
                            <label>
                                <input type="checkbox" name="training_check[]" value="MRV"> maintenance des reseaux informatiques
                            </label><br>
                            <label>
                                <input type="checkbox" name="training_check[]" value="MI"> maintenance informatique
                            </label><br>
                            <label>
                                <input type="checkbox" name="training_check[]" value="SC"> scretariat compatble
                            </label><br>
                            <label>
                                <input type="checkbox" name="training_check[]" value="comptabilite info"> comptabilite informatisée
                            </label><br>
                            <label>
                                <input type="checkbox" name="training_check[]" value="marketing digit"> marketing digital
                            </label><br>
                            <label>
                                <input type="checkbox" name="training_check[]" value="da"> developpement d'application
                            </label><br> <br>
                                
                             <button type="sumbit" class="bg-sky-500 p-1 h-10 w-1/4 hover:bg-blue-300 text-white font-bold
                             rounded-md text-center" id="btn_submit">Envoyer</button>                                              
                        </div>                      
                    </form>
            </div>
          
            <div class="bg-sky-500  m-4 h-16 text-2xl text-center shadow-xl ">
                <h1 class=" p-4 capitalize text-white font-bold">
                    nous formons en :
                </h1>
            </div>
        <!-- syteme de grille -->
    
            <div class="p-5  content-stretch md:content-around grid gap-8 sm:grid-cols-1 sm:size-10/12
             md:grid-cols-2 md:size-11/12 xl:grid-cols-3 xl:size-full 2xl:grid-cols-5 ">                              

              
                <div class="overflow-auto p-1 bg-white shadow-2xl rounded-md text-center">
                    <img src="./../Assets/Images/acceuil2.jpg" class="w-full h-3/4 float-left object-cover rounded-md" alt="">
                    <h1 class="font-bold text-center">Filiere: Developpement d'application (DA)</h1>
                    <h4>Prix: 200Fcrs <br> 
                        durrée: 1 ans <br>
                        <a href="#">
                            <button class=" h-10 w-32 bg-sky-500 text-white font-bold hover:bg-red-200 rounded">
                                Plus d'info
                            </button>
                        </a>

                        <a href="#registration">
                            <button class=" h-10 w-32 bg-blue-500 text-white font-bold hover:bg-blue-700 rounded">
                                M'inscrire
                            </button>
                        </a>
                    </h4>
                    <p class=" text-center m-2 ">formation en continu </p>

                </div>
              
                <div class="overflow-auto p-1 bg-white shadow-2xl rounded-md text-center">
                    <img src="./../Assets/Images/infographe1.jpg" class="w-full h-3/4 float-left object-cover rounded-md " alt="">
                    <h1 class="font-bold text-center">Filiere: Developpement d'application (DA)</h1>
                    <h4>Prix: 200Fcrs <br> 
                        durrée: 1 ans <br>
                        <a href="#">
                            <button class=" h-10 w-32 bg-sky-500 text-white font-bold hover:bg-red-200 rounded">
                                Plus d'info
                            </button>
                        </a>

                        <a href="#registration">
                            <button class=" h-10 w-32 bg-blue-500 text-white font-bold hover:bg-blue-700 rounded">
                                M'inscrire
                            </button>
                        </a>
                    </h4>
                    <p class=" text-center m-2 ">formation en continu </p>

                </div>

                <div class="overflow-auto p-1 bg-white shadow-2xl rounded-md text-center">
                    <img src="./../Assets/Images/MI_2.jpg" class="w-full h-3/4 float-left object-cover rounded-md" alt="">
                    <h1 class="font-bold text-center">Filiere: Developpement d'application (DA)</h1>
                    <h4>Prix: 200Fcrs <br> 
                        durrée: 1 ans <br>
                        <a href="#">
                            <button class=" h-10 w-32 bg-sky-500 text-white font-bold hover:bg-red-200 rounded">
                                Plus d'info
                            </button>
                        </a>

                        <a href="#registration">
                            <button class=" h-10 w-32 bg-blue-500 text-white font-bold hover:bg-blue-700 rounded">
                                M'inscrire
                            </button>
                        </a>
                    </h4>
                    <p class=" text-center m-2 ">formation en continu </p>

                </div>

                
               
            </div>
                        
      <br><br>      
      <!-- end page -->
      <div class="p-5 content-stretch md:content-around grid gap-8 sm:grid-cols-1 sm:size-10/12
      md:grid-cols-2 md:size-11/12 xl:grid-cols-4 xl:size-full 2xl:grid-cols-4 ">

      
        <div class="overflow-auto p-1 bg-white rounded-md text-center">

            <img src="./../Assets/Images/logo2.jpg" class="w-32 h-32  object-cover rounded-md m-auto" alt="">  <br>  
                <h4 class="text-gray-500">une équipe d'encadreurs qualifiés, expérimentés et disponibles.</h4> <br> 
                <a href="#">
                    <button class=" h-10 w-10 bg-gray-200 text-black font-bold hover:bg-red-300 rounded-full">
                    f
                    </button>
            </a>
            <a href="#">
                <button class=" h-10 w-10 bg-gray-200 text-black font-bold hover:bg-red-300 rounded-full">
                    f
                </button>
            </a>
        </div>

        <div class="overflow-auto p-1 bg-white rounded-md text-center">  

                <h4 class="font-bold underline uppercase">conditions d'admission</h4> <br>   

            <a href="#">
                <button class="text-gray-500 capitalize  bg-white  hover:bg-red-300 rounded p-1">
                    criteres d'admission.
                </button>
            </a> <br>

            <a href="#">
                <button class="text-gray-500 capitalize  bg-white  hover:bg-red-300 rounded p-1">
                    a propos de nous.
                </button>
            </a> <br>

            <a href="#">
                <button class="text-gray-500 capitalize  bg-white  hover:bg-red-300 rounded p-1">
                    calendrier academic.
                </button>
            </a> <br>
        </div>
      

    
        <div class="overflow-auto p-1 bg-white  rounded-md text-center">  

                <h4 class="font-bold underline uppercase">liens utiles</h4> <br>   

            <a href="#">
             <button class="text-gray-500 capitalize  bg-white  hover:bg-red-300 rounded p-1">
                 nos formations.
                </button>
            </a> <br>

            <a href="#">
             <button class="text-gray-500 capitalize  bg-white  hover:bg-red-300 rounded p-1">
                 voir les évenements.
                </button>
            </a> <br>
        </div>

        <div class="overflow-auto p-1 bg-white rounded-md text-center">  

                <h4 class="font-bold underline uppercase">trouvez nous au:</h4> <br>
                <h3 class="capitalize text-gray-500 ">Cameroun, region de l'ouest, ville de Dschang</h3> <br>
                <h3 class="capitalize text-gray-500 ">Dschang centre ville, derriere la quincaillerie sofotou,
                     <br> 2eme étage immeuble Nomeny Marché A</h3> <br>
                <h3 class="capitalize text-gray-500 ">+237 679 637 622 /+237 697 870 683</h3>  <br>
                <h3 class="capitalize text-gray-500 ">leaderinfo20323@gmail.com</h3>   
        </div>

      </div>
      <!-- flooter start -->
      <div class="w-full h-16 bg-sky-900 text-center p-4 shadow-2xl">
        <h1 class="text-gray-300">Copyright © <span class="text-white">fabrice nkeumo</span> 2024. All Right Reserved By 
        <a href="#"><span class="text-white underline hover:bg-gray-400 p-2 rounded ">fabrice nkeumo.</span></a>
        </h1>
      </div>
      <!-- flloter end -->
      <!-- end page -->
</body>
</html>
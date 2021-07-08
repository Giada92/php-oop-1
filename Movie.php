<?php 
    class Movie {
        //Proprietà o attributi
        public $title;
        public $poster;
        public $castArray;
        public $plot;
        public $genresArray;
        public $vote;

        //Costruttore
        function __construct($_title, $_vote, $_castArray = 0, $_genresArray = 0){
            $this->title = $_title;
            $this->castArray = array();
            $this->genresArray = array();
            $this->vote = $_vote;
        }

        //Metodi
        public function getVote(){
            for($i=0; $i<$this->vote; $i++){
                echo "<i class='fas fa-star'></i>";
            };
            for($i=0; $i<(5 - $this->vote); $i++){
                echo "<i class='far fa-star'></i>";
            }
        }

        public function getPlot(){
            return substr($this->plot, 0, 200) . "...";
        }

    }

//prima ISTANZA
$movie1 = new Movie("Ritorno al Futuro", 4);
//$movie1->title = "Ritorno al Futuro";
$movie1->castArray = ["Michael J. Fox", "Christopher Lloyd", "Lea Thompson", "Crispin Glover"];
$movie1->poster = "https://m.media-amazon.com/images/I/61ZEcXTypgS._AC_SY606_.jpg";
$movie1->plot = "Marty McFly è stato catapultato per errore nel 1955, grazie alla macchina del tempo ideata dal suo amico scienziato Doc. Non avendo più 'carburante' per poter tornare nel futuro si rivolge alla versione più giovane di Doc, che nonostante l'incredulità iniziale si farà in quattro per aiutarlo. Ma nel 1955 non è solo Doc ad essere più giovane, Marty infatti si imbatte casualmente nei suoi genitori, all'epoca teenager, ma l'incontro aggiungerà altri problemi.";
$movie1->genresArray = ["avventura", "commedia", "fantascienza"];
//$movie1->vote = 4;
//var_dump($movie1);

//seconda ISTANZA
$movie2 = new Movie("Il labirinto del Fauno", 5);
$movie2->castArray = ["Ivana Baquero", "Sergi López", "Maribel Verdú"];
$movie2->poster = "https://pad.mymovies.it/filmclub/2006/05/316/locandina.jpg";
$movie2->plot = "Spagna, 1944. La guerra civile si è conclusa da tempo, con Francisco Franco che ha preso saldamente il pieno potere. In una zona montuosa ci sono però ancora dei ribelli che non si arrendono al nuovo regime: l'avamposto deputato è sotto il comando dello spietato capitano Vidal che ha chiamato a sé la moglie Carmen, perché vuole che partorisca presso di lui. Carmen, che patisce il lungo viaggio, porta con sé la figlia Ofelia, nata dal primo matrimonio.";
$movie2->genresArray = ["drammatico", "fantastico", "horror"];
//$movie2->vote = 5;
//var_dump($movie2);
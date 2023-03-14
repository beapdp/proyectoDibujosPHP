<?php

namespace App\Controller;

use App\Entity\Drawing;
use App\Form\DrawingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrawingsController extends AbstractController{

    #[Route('/', name:"inicio")]
    public function goToInicio(){
        return $this->render('/inicio.html.twig');

    }

    #[Route('/drawingList', name:"list")]
    public function drawingsList(EntityManagerInterface $doctrine){
        $repositorio=$doctrine->getRepository(Drawing::class);
        $drawings=$repositorio->findAll();
        return $this->render('drawings/list.html.twig', ['drawings' => $drawings]);

    }

    #[Route('/drawingDetail/{id}', name:"detail")]
    public function drawingDetail(EntityManagerInterface $doctrine, $id){
        $repositorio=$doctrine->getRepository(Drawing::class);
        $drawing=$repositorio->find($id);
        return $this->render('drawings/detail.html.twig', ['drawing' => $drawing]);

        
    }

    #[Route('/new/drawing')]
    public function newDrawing(EntityManagerInterface $doctrine){
        
        $drawing1 = new Drawing();
        $drawing1 -> setNombre("Tortuga y pajarito");
        $drawing1 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-contorno-tortuga-dibujada-mano_23-2149301917.jpg?w=740&t=st=1678710536~exp=1678711136~hmac=92979a6458203e0d208ba5d494e36a9db5582b325b3f16b0034172809e4a344e");
        $drawing1 -> setDificultad("Fácil");

        $drawing2 = new Drawing();
        $drawing2 -> setNombre("Zorro descansando");
        $drawing2 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-contorno-elefante-zorro-dibujado-mano_23-2149301918.jpg?w=740&t=st=1678710720~exp=1678711320~hmac=3b5e1894d91a483c64f4a2bb106869318a313d1671f5e095dbbc7d2053caa7bc");
        $drawing2 -> setDificultad("Fácil");

        $drawing3 = new Drawing();
        $drawing3 -> setNombre("Conejo");
        $drawing3 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-contorno-conejito-dibujado-mano_23-2149301915.jpg?w=740&t=st=1678713669~exp=1678714269~hmac=7e83257f179199f3c160b727d250f958dd4cc417cccffcdb418ea78e2df0ffe4");
        $drawing3 -> setDificultad("Fácil");

        $drawing4 = new Drawing();
        $drawing4 -> setNombre("Elefante");
        $drawing4 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-contorno-elefante-dibujado-mano_23-2149301920.jpg?w=740&t=st=1678713805~exp=1678714405~hmac=3d9bf09dc84f3e2d37d038976a6e0ce28cc9734fb144f058936c39724d242878");
        $drawing4 -> setDificultad("Fácil");

        $drawing5 = new Drawing();
        $drawing5 -> setNombre("Cerdito");
        $drawing5 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-contorno-cerdo-dibujado-mano_23-2149301922.jpg?w=740&t=st=1678713899~exp=1678714499~hmac=bd998f2244e3a8c54595fff57d9461da2b86fdde942cd23bf801d800a51ea24e");
        $drawing5 -> setDificultad("Fácil");

        $drawing6 = new Drawing();
        $drawing6 -> setNombre("Rana");
        $drawing6 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-contorno-rana-dibujada-mano_23-2149301921.jpg?w=740&t=st=1678713967~exp=1678714567~hmac=fdc4cacfa3944ed0c3986d5c8142cc6c442815543d8cdf30fa45152df9ff8c95");
        $drawing6 -> setDificultad("Fácil");

        $drawing7 = new Drawing();
        $drawing7 -> setNombre("Oso");
        $drawing7 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-contorno-oso-dibujado-mano_23-2149301919.jpg?w=740&t=st=1678714042~exp=1678714642~hmac=3d98d06c46ae7b8e1b4aaed56de7dd3fc624035c1989799262eab070c8c3560c");
        $drawing7 -> setDificultad("Fácil");

        $drawing8 = new Drawing();
        $drawing8 -> setNombre("Zumo de frutas");
        $drawing8 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-libro-colorear-kawaii-dibujado-mano_52683-96634.jpg?w=740&t=st=1678714136~exp=1678714736~hmac=0485aec6877968beb2be282e22a8495859c9e8cbd2778f351cc4d297b7caae3d");
        $drawing8 -> setDificultad("Media");

        $drawing9 = new Drawing();
        $drawing9 -> setNombre("Unicornio");
        $drawing9 -> setImagen("https://img.freepik.com/vector-gratis/ninos-unicornio-colorear-vector-pagina-diseno-imprimible-blanco-que-ninos-completen_53876-151353.jpg?w=740&t=st=1678714248~exp=1678714848~hmac=635cf7779208d1baac69a404acfb57fb2cc2b8e7f17cec1cdbbfc9aafc68ec8f");
        $drawing9 -> setDificultad("Media");

        $drawing10 = new Drawing();
        $drawing10 -> setNombre("Koala");
        $drawing10 -> setImagen("https://img.freepik.com/vector-gratis/vector-lindo-koala-haciendo-yoga-color-blanco-negro_75487-1312.jpg?w=740&t=st=1678714336~exp=1678714936~hmac=cd2e52ffd79602fe7f979dc59fdb997008c72b0be6c0b467c8aa674dbfbd7aee");
        $drawing10 -> setDificultad("Fácil");

        $drawing11 = new Drawing();
        $drawing11 -> setNombre("Planetas");
        $drawing11 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-libro-colorear-kawaii-dibujado-mano_23-2149729066.jpg?w=740&t=st=1678714391~exp=1678714991~hmac=34291d061567e157c49e4522d79b96adda36a97afb51e35a6c5aff101e014c02");
        $drawing11 -> setDificultad("Fácil");

        $drawing12 = new Drawing();
        $drawing12 -> setNombre("Flores");
        $drawing12 -> setImagen("https://img.freepik.com/vector-gratis/flores-dibujadas-mano-ilustracion-libro-colorear_23-2149720989.jpg?w=740&t=st=1678714581~exp=1678715181~hmac=b905776569dd086a92b5586330c50a36b93c01759607739270bb7370ac352301");
        $drawing12 -> setDificultad("Media");

        $drawing13 = new Drawing();
        $drawing13 -> setNombre("Gato espacial");
        $drawing13 -> setImagen("https://img.freepik.com/vector-gratis/ilustracion-libro-colorear-kawaii-dibujado-mano_52683-97397.jpg?w=740&t=st=1678714729~exp=1678715329~hmac=2cfb2f935cc6940d48f64dcc5a7cd77e407fef8aa710dd65e724eb6457616a94");
        $drawing13 -> setDificultad("Media");

        $drawing14 = new Drawing();
        $drawing14 -> setNombre("Jirafa");
        $drawing14 -> setImagen("https://img.freepik.com/vector-gratis/ninos-jirafa-colorear-vector-pagina-diseno-imprimible-blanco-que-ninos-completen_53876-151359.jpg?w=740&t=st=1678714865~exp=1678715465~hmac=6cc0d0cbfc3bba20af253e9116bb04c447e77211bfe2047d94e52ce97a9301c3");
        $drawing14 -> setDificultad("Media");

        $drawing15 = new Drawing();
        $drawing15 -> setNombre("Perro");
        $drawing15 -> setImagen("https://img.freepik.com/vector-gratis/ninos-perro-colorear-vector-pagina-diseno-imprimible-blanco-que-ninos-completen_53876-151354.jpg?w=740&t=st=1678714943~exp=1678715543~hmac=e9fcc1df9ef4a5ca73751a3bc8a0ba4687db6e113a4a54ddf529c2b812bc0d1b");
        $drawing15 -> setDificultad("Media");
        
        $doctrine -> persist($drawing1);
        $doctrine -> persist($drawing2);
        $doctrine -> persist($drawing3);
        $doctrine -> persist($drawing4);
        $doctrine -> persist($drawing5);
        $doctrine -> persist($drawing6);
        $doctrine -> persist($drawing7);
        $doctrine -> persist($drawing8);
        $doctrine -> persist($drawing9);
        $doctrine -> persist($drawing10);
        $doctrine -> persist($drawing11);
        $doctrine -> persist($drawing12);
        $doctrine -> persist($drawing13);
        $doctrine -> persist($drawing14);
        $doctrine -> persist($drawing15);

        $doctrine -> flush();
        return new Response("Dibujos insertados correctamente");

    }

    #[Route('/insertDrawing' , name:'insertDrawing')]
    public function insertDrawing(Request $request, EntityManagerInterface $doctrine){
        $form = $this -> createForm(DrawingType::class);
        $form -> handleRequest($request);
        if ($form -> isSubmitted() && $form -> isValid()){
            $drawing = $form -> getData();
            $doctrine -> persist($drawing);
            $doctrine -> flush();
            $this -> addFlash('success', 'Dibujo insertado correctamente');
            return $this -> redirectToRoute('list');
        }
        return $this-> renderForm('drawings/insert.html.twig', ['drawingForm' => $form]);
    }

}



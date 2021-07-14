<?php
namespace App\Controller;

use Universe\Starship\Controller;

/**
 * @Route("/")
 */
class DocsController extends Controller {

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->data = $data = [
            'version' => 'alpha',
            'frameworkName' => 'Universe',
            'sidebar'=>[
                'Getting Started'=>[
                    'uri'=>'installation',
                    'sub'=>[
                        'Installation'=>'installation',
                        'Configuration'=>'configuration',
                        'Directory Structure'=>'structure',
                        'Starter Kits'=>'starter-kits',
                        'Deployment'=>'deployment',
                    ]
                ],
                'Architecture Concepts'=>[
                    'uri'=>'architecture',
                    'sub'=>[
                        'Request Lifecycle'=>'lifecycle'
                    ]
                ]
            ]
        ];
    }

    /**
     * @Route("", methods={"GET"}, name="docs_index")
     */
    public function index(){
        $data = $this->data;
        $data['activePage'] = 'installation';
        $this->render('pages/docs/installation.html.twig',$data);
    }

    /**
     * @Route("/installation", methods={"GET"}, name="docs_index")
     */
    public function installation(){
        $this->index();
    }

    /**
     * @Route("/configuration", methods={"GET"}, name="docs_index")
     */
    public function configuration(){
        $data = $this->data;
        $data['activePage'] = 'configuration';
        $this->render('pages/docs/configuration.html.twig',$data);
    }
}
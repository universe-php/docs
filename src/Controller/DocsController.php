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
                        'Request Lifecycle'=>'lifecycle',
                        'Service Container'=>'service-container',
                        'Service Providers'=>'service-providers',
                        'Facades'=>'facades'
                    ]
                ],
                'The Basics'=>[
                    'uri'=>'the-basics',
                    'sub'=>[
                        'Routing'=>'routing',
                        'Middleware'=>'Middleware',
                        'CSRF Protection'=>'csrf-protection',
                        'Controllers'=>'controllers',
                        'Request'=>'request',
                        'Response'=>'response',
                        'Render'=>'render',
                        'Twig Templates'=>'twig-templates',
                        'URL Generation'=>'url-generation',
                        'Session'=>'session',
                        'Validation'=>'validation',
                        'Error Handling'=>'error-handling',
                        'Logging'=>'logging',
                    ]
                ],
                'Digging Deeper'=>[
                    'uri'=>'digging-deeper',
                    'sub'=>[
                        'Console Commands'=>'console-commands',
                        'Cache'=>'cache',
                        'Collections'=>'collections',
                        'Contracts'=>'contracts',
                        'File Storage'=>'file-storage',
                        'Helpers'=>'helpers',
                        'HTTP Client'=>'http-client',
                        'Localization'=>'localization',
                        'Mail'=>'mail'
                    ]
                ],
                'Security'=>[
                    'uri'=>'Security',
                    'sub'=>[
                        'Authentication'=>'authentication',
                        'Authorization'=>'authorization',
                        'Email Verification'=>'email-verification',
                        'Encryption'=>'encryption',
                        'Hashing'=>'hashing',
                        'Resetting Passwords'=>'resetting-passwords',
                        
                    ]
                ],
                'Database'=>[
                    'uri'=>'Database',
                    'sub'=>[
                        'Getting Started'=>'getting-started',
                        'Query Builder'=>'query-builder',
                        'Repository'=>'repository',
                        'Entity'=>'entity',
                    ]
                ],
                'Universe ORM'=>[
                    'uri'=>'universe-orm',
                    'sub'=>[
                        'Getting Started'=>'getting-started',
                        'Database Connection'=>'database-connection',
                        'Repository'=>'repository',
                        'Entity'=>'entity',
                    ]
                ],
                'Packages'=>[
                    'uri'=>'packages',
                    'sub'=>[
                        'Asteroids'=>'asteroids',
                        'Shield'=>'shield',
                        'Signalling'=>'signalling',
                        'Starship'=>'starship',
                        'Telescope' => 'telescope',
                        'Template Engine' => 'template-engine'
                    ]
                ],


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
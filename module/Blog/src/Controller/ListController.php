<?php
namespace Blog\Controller;
use Blog\Model\PostRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ListController extends AbstractActionController {

    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;
    
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function indexAction()
    {
        // Retorno explícito ViewModel:
        return new ViewModel([ 'posts' => $this->postRepository->findAllPosts(), ]);
        return new ViewModel([ 'posts' => $this->postRepository->findAllPosts(), ]);
        
        // Retorno implícito ViewModel:
        //return [ 'posts' => $this->postRepository->findAllPosts(), ];

    }

}
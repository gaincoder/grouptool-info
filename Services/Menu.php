<?php


namespace InfoBundle\Services;


use AppBundle\Interfaces\MenuInterface;
use Symfony\Component\Templating\EngineInterface;

class Menu implements MenuInterface
{
    /**
     * @var EngineInterface
     */
    private $twig;

    public function __construct(EngineInterface $twig)
    {
        $this->twig = $twig;
    }

    public function getEntries(): string
    {
        return $this->twig->render('@Info/menu.html.twig');
    }
}
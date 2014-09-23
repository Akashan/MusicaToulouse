<?php

namespace MusicaToulouse\UserBundle\Handler;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
// use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Routing\Router;

class LogoutSuccessHandler extends ContainerAware implements LogoutSuccessHandlerInterface
{

    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function onLogoutSuccess(Request $request)
    {
        // redirect the user to where they were before the login process begun.
        $referer_url = $request->headers->get('referer');

        $response = new RedirectResponse($referer_url);
        return $response;
    }

}
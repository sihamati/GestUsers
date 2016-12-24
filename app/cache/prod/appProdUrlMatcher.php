<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // path1_ges_users_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'path1_ges_users_homepage')), array (  '_controller' => 'path1\\GesUsersBundle\\Controller\\DefaultController::indexAction',));
        }

        // _add_user
        if ($pathinfo === '/AddUser') {
            return array (  '_controller' => 'path1\\GesUsersBundle\\Controller\\ManageUsersController::AddUserAction',  '_route' => '_add_user',);
        }

        // _update_user
        if ($pathinfo === '/UpdateUser') {
            return array (  '_controller' => 'path1\\GesUsersBundle\\Controller\\ManageUsersController::UpdateUserAction',  '_route' => '_update_user',);
        }

        // _list_user
        if ($pathinfo === '/ListUsers') {
            return array (  '_controller' => 'path1\\GesUsersBundle\\Controller\\ManageUsersController::ListUsersAction',  '_route' => '_list_user',);
        }

        // _delete_user
        if ($pathinfo === '/DeleteUser') {
            return array (  '_controller' => 'path1\\GesUsersBundle\\Controller\\ManageUsersController::DeleteUserAction',  '_route' => '_delete_user',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

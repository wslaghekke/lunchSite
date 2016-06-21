<?php

namespace Bytefusion\Lunch\DefaultBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

/**
 * Class Builder
 * @package Bytefusion\Lunch\DefaultBundle\Menu
 * @author Willem Slaghekke <willem.slaghekke@live.nl>
 */
class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function leftNavbar(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');

        $menu->addChild('Home', [
            'route' => 'bytefusion_lunch_default_default_index'
        ]);

        $menu->addChild('Test', [
            'route' => 'bytefusion_lunch_admin_default_index'
        ]);
        return $menu;
    }

    public function rightNavbar(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');


        $token = $this->container->get('security.token_storage')->getToken();
        if (!is_object($user = $token->getUser())) {
            $menu->addChild('Login', [
                'route' => 'fos_user_security_login'
            ]);
        } else {
            $userMenu = $menu->addChild('User menu')->setAttribute('dropdown', true);
//            $userMenu->addChild('Settings');
            $userMenu->addChild('Logout',[
                'route' => 'fos_user_security_logout'
            ]);
        }

        return $menu;
    }
}
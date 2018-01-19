<?php

namespace Donfelice\AnalyticsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpKernel\DependencyInjection\Extension;
//use Symfony\Component\DependencyInjection\ContainerBuilder;
//use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
//use Symfony\Component\Config\FileLocator;
//use eZ\Publish\Core\MVC\ConfigResolverInterface;

class DefaultController extends Controller
{

    private $configResolver;

    public function indexAction()
    {
        return $this->render('DonfeliceAnalyticsBundle:Default:index.html.twig');
    }

    public function dashboardAction()
    {
        $clientid = $this->getParameter('analytics.clientid');

        return $this->render('DonfeliceAnalyticsBundle:Default:dashboard.html.twig',
            array(
                'clientid' => $clientid
            )
        );
    }

    public function pagesAction()
    {
        $clientid = $this->getParameter('analytics.clientid');

        return $this->render('DonfeliceAnalyticsBundle:Default:pages.html.twig',
            array(
                'clientid' => $clientid
            )
        );
    }

    public function regionsAction()
    {

        return $this->render('DonfeliceAnalyticsBundle:Default:regions.html.twig');
    }

    public function regionAction( $region )
    {
        $clientid = $this->getParameter('analytics.clientid');
        $region_names = $this->getParameter('analytics.region_names');
        $region_filters = $this->getParameter('analytics.region_filters');

        return $this->render('DonfeliceAnalyticsBundle:Default:region.html.twig',
            array(
                'clientid' => $clientid,
                'region' => $region,
                'region_names' => $region_names,
                'region_filters' => $region_filters
            )
        );
    }
}

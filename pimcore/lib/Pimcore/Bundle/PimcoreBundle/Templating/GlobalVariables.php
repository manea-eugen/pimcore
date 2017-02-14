<?php

namespace Pimcore\Bundle\PimcoreBundle\Templating\GlobalVariables;

use Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables as BaseGlobalVariables;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GlobalVariables extends BaseGlobalVariables
{
    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }
}

<?php

namespace ExpressiveAssets;

use Interop\Container\ContainerInterface;

/**
 * Class AssetControllerFactory
 *
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2016 Reliv International
 * @license   License.txt
 * @link      https://github.com/reliv
 */
class AssetControllerFactory
{
    /**
     * __invoke
     *
     * @param ContainerInterface $container
     *
     * @return AssetController
     */
    public function __invoke($container)
    {
        $config = $container->get('Config');
        $commonHeaders = $container->get(CommonHeaders::class);

        return new AssetController(
            $config,
            $commonHeaders
        );
    }
}

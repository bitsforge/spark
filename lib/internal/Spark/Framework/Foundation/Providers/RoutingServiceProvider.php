<?php

/**
 * Copyright (C) 2023 OpenStars Lab Development Team
 *
 * This file is part of spark/spark
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 */

namespace Spark\Framework\Foundation\Providers;

use Nulldark\Routing\RouteCollection;
use Nulldark\Routing\Router;
use Nulldark\Routing\RouterInterface;
use Spark\Framework\Container\ContainerInterface;
use Spark\Framework\Container\ServiceProviderInterface;

class RoutingServiceProvider implements ServiceProviderInterface
{

    /**
     * @inheritDoc
     */
    public function register(ContainerInterface $container): void
    {
        $container->set(RouteCollection::class, new RouteCollection());
        $container->factory(RouterInterface::class, function (ContainerInterface $container) {
            $router = new Router();
            $router->setRouteCollection($container->get(RouteCollection::class));

            return $router;
        });
    }
}
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

namespace Spark\Extension;

use Nulldark\Container\ContainerInterface;
use Spark\Foundation\Providers\ServiceProvider;

class ExtensionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->container->singleton(
            'module_handler', function (ContainerInterface $container) {
                return new ModuleHandler(
                    $container->get('kernel.base_path'),
                    $container->get('class_loader')
                );
            }
        );
    }

    public function boot(): void
    {
        $extenesions = $this->container->get('module_handler')->getList();

        foreach ($extenesions as $extension) {
            $extension->boot($this->container);
        }
    }
}

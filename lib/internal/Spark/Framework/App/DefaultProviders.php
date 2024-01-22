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

namespace Spark\Framework\App;

final class DefaultProviders
{
    /** @var class-string<\Spark\Framework\Container\ServiceProvider>[] $providers */
    protected array $providers = [];

    public function __construct()
    {
        $this->providers = [
            \Spark\Framework\Routing\RoutingServiceProvider::class,
            \Spark\Framework\Cache\CacheServiceProvider::class,
            \Spark\Framework\Extension\ExtensionServiceProvider::class,
            \Spark\Framework\App\ApplicationServiceProvider::class,
        ];
    }

    /**
     * Gets a default providers collection as array
     *
     * @return class-string<\Spark\Framework\Container\ServiceProvider>[]
     */
    public function toArray(): array
    {
        return $this->providers;
    }
}
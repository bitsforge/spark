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

namespace Spark\Contract\HttpFoundation;

/**
 * Uri contract.
 *
 * @since       2023-11-19
 * @package     Spark\Contract\HttpFoundation
 * @author      Dominik Szamburski <dominikszamburski99@gmail.com>
 * @license     https://opensource.org/license/lgpl-2-1/
 * @link        https://github.com/openstarslab/spark-core
 */
interface Uri
{
    /**
     * Retrieve the scheme component of the URI.
     *
     * @return string
     */
    public function getScheme(): string;

    /**
     * Retrieve the host component of the URI.
     *
     * @return string
     */
    public function getHost(): string;

    /**
     * Retrieve the port component of the URI.
     *
     * @return int|null
     */
    public function getPort(): ?int;

    /**
     * Retrieve the path component of the URI.
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * Retrieve the query string of the URI.
     *
     * @return string
     */
    public function getQuery(): string;
}
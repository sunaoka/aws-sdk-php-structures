<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerServiceRegistryLogin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $username
 * @property string|null $password
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property string|null $registry
 */
class ContainerServiceRegistryLogin extends Shape
{
    /**
     * @param array{
     *     username?: string|null,
     *     password?: string|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     registry?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

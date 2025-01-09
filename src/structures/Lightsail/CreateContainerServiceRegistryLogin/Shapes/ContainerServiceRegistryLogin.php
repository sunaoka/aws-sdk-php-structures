<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerServiceRegistryLogin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $username
 * @property string $password
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property string $registry
 */
class ContainerServiceRegistryLogin extends Shape
{
    /**
     * @param array{
     *     username?: string,
     *     password?: string,
     *     expiresAt?: \Aws\Api\DateTimeResult,
     *     registry?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

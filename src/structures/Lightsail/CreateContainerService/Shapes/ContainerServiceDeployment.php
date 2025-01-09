<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $version
 * @property 'ACTIVATING'|'ACTIVE'|'INACTIVE'|'FAILED' $state
 * @property array<string, Container> $containers
 * @property ContainerServiceEndpoint $publicEndpoint
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class ContainerServiceDeployment extends Shape
{
    /**
     * @param array{
     *     version?: int,
     *     state?: 'ACTIVATING'|'ACTIVE'|'INACTIVE'|'FAILED',
     *     containers?: array<string, Container>,
     *     publicEndpoint?: ContainerServiceEndpoint,
     *     createdAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

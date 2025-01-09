<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, Container> $containers
 * @property EndpointRequest $publicEndpoint
 */
class ContainerServiceDeploymentRequest extends Shape
{
    /**
     * @param array{
     *     containers?: array<string, Container>,
     *     publicEndpoint?: EndpointRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

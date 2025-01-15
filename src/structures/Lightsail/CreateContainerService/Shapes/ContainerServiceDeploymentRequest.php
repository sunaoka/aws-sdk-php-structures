<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, Container>|null $containers
 * @property EndpointRequest|null $publicEndpoint
 */
class ContainerServiceDeploymentRequest extends Shape
{
    /**
     * @param array{
     *     containers?: array<string, Container>|null,
     *     publicEndpoint?: EndpointRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

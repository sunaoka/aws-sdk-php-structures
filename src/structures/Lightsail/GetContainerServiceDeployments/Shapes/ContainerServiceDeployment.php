<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $version
 * @property 'ACTIVATING'|'ACTIVE'|'INACTIVE'|'FAILED'|null $state
 * @property array<string, Container>|null $containers
 * @property ContainerServiceEndpoint|null $publicEndpoint
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class ContainerServiceDeployment extends Shape
{
    /**
     * @param array{
     *     version?: int|null,
     *     state?: 'ACTIVATING'|'ACTIVE'|'INACTIVE'|'FAILED'|null,
     *     containers?: array<string, Container>|null,
     *     publicEndpoint?: ContainerServiceEndpoint|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

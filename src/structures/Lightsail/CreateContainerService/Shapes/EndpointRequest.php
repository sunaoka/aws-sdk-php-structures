<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerName
 * @property int $containerPort
 * @property ContainerServiceHealthCheckConfig|null $healthCheck
 */
class EndpointRequest extends Shape
{
    /**
     * @param array{
     *     containerName: string,
     *     containerPort: int,
     *     healthCheck?: ContainerServiceHealthCheckConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

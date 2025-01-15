<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerName
 * @property int|null $containerPort
 * @property ContainerServiceHealthCheckConfig|null $healthCheck
 */
class ContainerServiceEndpoint extends Shape
{
    /**
     * @param array{
     *     containerName?: string|null,
     *     containerPort?: int|null,
     *     healthCheck?: ContainerServiceHealthCheckConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

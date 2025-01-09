<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerName
 * @property int $containerPort
 * @property ContainerServiceHealthCheckConfig $healthCheck
 */
class ContainerServiceEndpoint extends Shape
{
    /**
     * @param array{
     *     containerName?: string,
     *     containerPort?: int,
     *     healthCheck?: ContainerServiceHealthCheckConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $healthyThreshold
 * @property int $unhealthyThreshold
 * @property int $timeoutSeconds
 * @property int $intervalSeconds
 * @property string $path
 * @property string $successCodes
 */
class ContainerServiceHealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     healthyThreshold?: int,
     *     unhealthyThreshold?: int,
     *     timeoutSeconds?: int,
     *     intervalSeconds?: int,
     *     path?: string,
     *     successCodes?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

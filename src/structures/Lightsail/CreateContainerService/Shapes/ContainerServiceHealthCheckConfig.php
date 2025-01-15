<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $healthyThreshold
 * @property int|null $unhealthyThreshold
 * @property int|null $timeoutSeconds
 * @property int|null $intervalSeconds
 * @property string|null $path
 * @property string|null $successCodes
 */
class ContainerServiceHealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     healthyThreshold?: int|null,
     *     unhealthyThreshold?: int|null,
     *     timeoutSeconds?: int|null,
     *     intervalSeconds?: int|null,
     *     path?: string|null,
     *     successCodes?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

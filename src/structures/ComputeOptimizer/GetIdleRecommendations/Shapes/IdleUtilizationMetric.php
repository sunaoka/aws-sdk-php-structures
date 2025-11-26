<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CPU'|'Memory'|'NetworkOutBytesPerSecond'|'NetworkInBytesPerSecond'|'DatabaseConnections'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond'|'ActiveConnectionCount'|'PacketsInFromSource'|'PacketsInFromDestination'|null $name
 * @property 'Maximum'|'Average'|null $statistic
 * @property double|null $value
 */
class IdleUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'CPU'|'Memory'|'NetworkOutBytesPerSecond'|'NetworkInBytesPerSecond'|'DatabaseConnections'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond'|'ActiveConnectionCount'|'PacketsInFromSource'|'PacketsInFromDestination'|null,
     *     statistic?: 'Maximum'|'Average'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

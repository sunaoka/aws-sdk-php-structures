<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CPU'|'Memory'|'NetworkOutBytesPerSecond'|'NetworkInBytesPerSecond'|'DatabaseConnections'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond' $name
 * @property 'Maximum'|'Average' $statistic
 * @property double $value
 */
class IdleUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'CPU'|'Memory'|'NetworkOutBytesPerSecond'|'NetworkInBytesPerSecond'|'DatabaseConnections'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond',
     *     statistic?: 'Maximum'|'Average',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

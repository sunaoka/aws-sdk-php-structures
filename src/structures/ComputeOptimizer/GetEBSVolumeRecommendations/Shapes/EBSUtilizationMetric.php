<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond'|'VolumeReadBytesPerSecond'|'VolumeWriteBytesPerSecond' $name
 * @property 'Maximum'|'Average' $statistic
 * @property double $value
 */
class EBSUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond'|'VolumeReadBytesPerSecond'|'VolumeWriteBytesPerSecond',
     *     statistic?: 'Maximum'|'Average',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

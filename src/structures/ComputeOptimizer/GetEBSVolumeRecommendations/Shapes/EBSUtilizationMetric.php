<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond'|'VolumeReadBytesPerSecond'|'VolumeWriteBytesPerSecond'|null $name
 * @property 'Maximum'|'Average'|null $statistic
 * @property double|null $value
 */
class EBSUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond'|'VolumeReadBytesPerSecond'|'VolumeWriteBytesPerSecond'|null,
     *     statistic?: 'Maximum'|'Average'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

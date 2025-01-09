<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $volumeType
 * @property int $volumeSize
 * @property int $volumeBaselineIOPS
 * @property int $volumeBurstIOPS
 * @property int $volumeBaselineThroughput
 * @property int $volumeBurstThroughput
 * @property bool $rootVolume
 */
class VolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     volumeType?: string,
     *     volumeSize?: int,
     *     volumeBaselineIOPS?: int,
     *     volumeBurstIOPS?: int,
     *     volumeBaselineThroughput?: int,
     *     volumeBurstThroughput?: int,
     *     rootVolume?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

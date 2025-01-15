<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $volumeType
 * @property int|null $volumeSize
 * @property int|null $volumeBaselineIOPS
 * @property int|null $volumeBurstIOPS
 * @property int|null $volumeBaselineThroughput
 * @property int|null $volumeBurstThroughput
 * @property bool|null $rootVolume
 */
class VolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     volumeType?: string|null,
     *     volumeSize?: int|null,
     *     volumeBaselineIOPS?: int|null,
     *     volumeBurstIOPS?: int|null,
     *     volumeBaselineThroughput?: int|null,
     *     volumeBurstThroughput?: int|null,
     *     rootVolume?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

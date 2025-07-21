<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 16384>|null $VolumeSizeInGB
 */
class ClusterEbsVolumeConfig extends Shape
{
    /**
     * @param array{VolumeSizeInGB?: int<1, 16384>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

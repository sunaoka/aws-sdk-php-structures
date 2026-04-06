<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 16384> $VolumeSizeInGB
 */
class ClusterEbsVolumeConfig extends Shape
{
    /**
     * @param array{VolumeSizeInGB: int<1, 16384>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $VolumeSizeInGB
 */
class ClusterEbsVolumeConfig extends Shape
{
    /**
     * @param array{VolumeSizeInGB: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

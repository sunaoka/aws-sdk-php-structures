<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterEbsVolumeConfig $EbsVolumeConfig
 */
class ClusterInstanceStorageConfig extends Shape
{
    /**
     * @param array{EbsVolumeConfig?: ClusterEbsVolumeConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterEbsVolumeConfig|null $EbsVolumeConfig
 */
class ClusterInstanceStorageConfig extends Shape
{
    /**
     * @param array{EbsVolumeConfig?: ClusterEbsVolumeConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

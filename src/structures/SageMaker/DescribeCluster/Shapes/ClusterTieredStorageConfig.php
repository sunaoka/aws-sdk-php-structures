<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enable'|'Disable' $Mode
 * @property int<0, 100>|null $InstanceMemoryAllocationPercentage
 */
class ClusterTieredStorageConfig extends Shape
{
    /**
     * @param array{
     *     Mode: 'Enable'|'Disable',
     *     InstanceMemoryAllocationPercentage?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

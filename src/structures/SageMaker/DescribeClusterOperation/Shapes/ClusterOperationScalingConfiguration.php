<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $CurrentCount
 * @property int<0, max>|null $TargetCount
 * @property int<0, max>|null $MinCount
 */
class ClusterOperationScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     CurrentCount?: int<0, max>|null,
     *     TargetCount?: int<0, max>|null,
     *     MinCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

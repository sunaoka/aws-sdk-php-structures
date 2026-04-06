<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 10000000>|null $InstanceCount
 * @property int<0, max>|null $TargetCount
 * @property int<0, 10000000>|null $MinCount
 * @property string|null $FailureMessage
 */
class InstanceGroupScalingMetadata extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int<0, 10000000>|null,
     *     TargetCount?: int<0, max>|null,
     *     MinCount?: int<0, 10000000>|null,
     *     FailureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

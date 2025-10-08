<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterMetadata|null $Cluster
 * @property InstanceGroupMetadata|null $InstanceGroup
 * @property InstanceGroupScalingMetadata|null $InstanceGroupScaling
 * @property InstanceMetadata|null $Instance
 */
class EventMetadata extends Shape
{
    /**
     * @param array{
     *     Cluster?: ClusterMetadata|null,
     *     InstanceGroup?: InstanceGroupMetadata|null,
     *     InstanceGroupScaling?: InstanceGroupScalingMetadata|null,
     *     Instance?: InstanceMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

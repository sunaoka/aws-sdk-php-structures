<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterMetadata|null $Cluster
 * @property InstanceGroupMetadata|null $InstanceGroup
 * @property InstanceGroupScalingMetadata|null $InstanceGroupScaling
 * @property InstanceMetadata|null $Instance
 * @property DatabaseConfigurationMetadata|null $DatabaseConfiguration
 * @property SlurmHealthMetadata|null $SlurmHealth
 */
class EventMetadata extends Shape
{
    /**
     * @param array{
     *     Cluster?: ClusterMetadata|null,
     *     InstanceGroup?: InstanceGroupMetadata|null,
     *     InstanceGroupScaling?: InstanceGroupScalingMetadata|null,
     *     Instance?: InstanceMetadata|null,
     *     DatabaseConfiguration?: DatabaseConfigurationMetadata|null,
     *     SlurmHealth?: SlurmHealthMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

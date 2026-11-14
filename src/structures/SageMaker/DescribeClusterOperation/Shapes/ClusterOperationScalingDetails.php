<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceGroupName
 * @property 'InProgress'|'Superseded'|'Done'|null $Status
 * @property ClusterOperationScalingConfiguration|null $Original
 * @property ClusterOperationScalingConfiguration|null $Desired
 */
class ClusterOperationScalingDetails extends Shape
{
    /**
     * @param array{
     *     InstanceGroupName?: string|null,
     *     Status?: 'InProgress'|'Superseded'|'Done'|null,
     *     Original?: ClusterOperationScalingConfiguration|null,
     *     Desired?: ClusterOperationScalingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

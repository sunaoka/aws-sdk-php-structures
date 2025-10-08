<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enable'|'Disable' $Mode
 * @property 'Karpenter'|null $AutoScalerType
 * @property 'InService'|'Failed'|'Creating'|'Deleting' $Status
 * @property string|null $FailureMessage
 */
class ClusterAutoScalingConfigOutput extends Shape
{
    /**
     * @param array{
     *     Mode: 'Enable'|'Disable',
     *     AutoScalerType?: 'Karpenter'|null,
     *     Status: 'InService'|'Failed'|'Creating'|'Deleting',
     *     FailureMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

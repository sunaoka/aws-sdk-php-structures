<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enable'|'Disable' $Mode
 * @property 'Karpenter'|null $AutoScalerType
 */
class ClusterAutoScalingConfig extends Shape
{
    /**
     * @param array{
     *     Mode: 'Enable'|'Disable',
     *     AutoScalerType?: 'Karpenter'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

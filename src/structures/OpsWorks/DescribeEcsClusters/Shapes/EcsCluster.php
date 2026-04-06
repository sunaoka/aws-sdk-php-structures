<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeEcsClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EcsClusterArn
 * @property string|null $EcsClusterName
 * @property string|null $StackId
 * @property string|null $RegisteredAt
 */
class EcsCluster extends Shape
{
    /**
     * @param array{
     *     EcsClusterArn?: string|null,
     *     EcsClusterName?: string|null,
     *     StackId?: string|null,
     *     RegisteredAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

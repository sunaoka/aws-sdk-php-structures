<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeEcsClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EcsClusterArn
 * @property string $EcsClusterName
 * @property string $StackId
 * @property string $RegisteredAt
 */
class EcsCluster extends Shape
{
    /**
     * @param array{
     *     EcsClusterArn?: string,
     *     EcsClusterName?: string,
     *     StackId?: string,
     *     RegisteredAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

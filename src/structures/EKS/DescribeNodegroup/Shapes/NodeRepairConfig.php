<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property int<1, max>|null $maxUnhealthyNodeThresholdCount
 * @property int<1, 100>|null $maxUnhealthyNodeThresholdPercentage
 * @property int<1, max>|null $maxParallelNodesRepairedCount
 * @property int<1, 100>|null $maxParallelNodesRepairedPercentage
 * @property list<NodeRepairConfigOverrides>|null $nodeRepairConfigOverrides
 */
class NodeRepairConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     maxUnhealthyNodeThresholdCount?: int<1, max>|null,
     *     maxUnhealthyNodeThresholdPercentage?: int<1, 100>|null,
     *     maxParallelNodesRepairedCount?: int<1, max>|null,
     *     maxParallelNodesRepairedPercentage?: int<1, 100>|null,
     *     nodeRepairConfigOverrides?: list<NodeRepairConfigOverrides>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

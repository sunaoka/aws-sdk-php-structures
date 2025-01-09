<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetGroupTuple> $TargetGroups
 * @property TargetGroupStickinessConfig $TargetGroupStickinessConfig
 */
class ForwardActionConfig extends Shape
{
    /**
     * @param array{
     *     TargetGroups?: list<TargetGroupTuple>,
     *     TargetGroupStickinessConfig?: TargetGroupStickinessConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

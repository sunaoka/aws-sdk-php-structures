<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetGroupTuple>|null $TargetGroups
 * @property TargetGroupStickinessConfig|null $TargetGroupStickinessConfig
 */
class ForwardActionConfig extends Shape
{
    /**
     * @param array{
     *     TargetGroups?: list<TargetGroupTuple>|null,
     *     TargetGroupStickinessConfig?: TargetGroupStickinessConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWAITING_FULFILLMENT'|'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'TERMINATED' $State
 * @property InstanceStateChangeReason $StateChangeReason
 * @property InstanceTimeline $Timeline
 */
class InstanceStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'AWAITING_FULFILLMENT'|'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'TERMINATED',
     *     StateChangeReason?: InstanceStateChangeReason,
     *     Timeline?: InstanceTimeline
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

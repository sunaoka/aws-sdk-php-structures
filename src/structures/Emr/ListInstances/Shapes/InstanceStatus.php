<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWAITING_FULFILLMENT'|'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'TERMINATED'|null $State
 * @property InstanceStateChangeReason|null $StateChangeReason
 * @property InstanceTimeline|null $Timeline
 */
class InstanceStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'AWAITING_FULFILLMENT'|'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'TERMINATED'|null,
     *     StateChangeReason?: InstanceStateChangeReason|null,
     *     Timeline?: InstanceTimeline|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

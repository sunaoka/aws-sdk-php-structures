<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RECONFIGURING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'ARRESTED'|'SHUTTING_DOWN'|'ENDED'|null $State
 * @property InstanceGroupStateChangeReason|null $StateChangeReason
 * @property InstanceGroupTimeline|null $Timeline
 */
class InstanceGroupStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RECONFIGURING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'ARRESTED'|'SHUTTING_DOWN'|'ENDED'|null,
     *     StateChangeReason?: InstanceGroupStateChangeReason|null,
     *     Timeline?: InstanceGroupTimeline|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

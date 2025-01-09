<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RECONFIGURING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'ARRESTED'|'SHUTTING_DOWN'|'ENDED' $State
 * @property InstanceGroupStateChangeReason $StateChangeReason
 * @property InstanceGroupTimeline $Timeline
 */
class InstanceGroupStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RECONFIGURING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'ARRESTED'|'SHUTTING_DOWN'|'ENDED',
     *     StateChangeReason?: InstanceGroupStateChangeReason,
     *     Timeline?: InstanceGroupTimeline
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

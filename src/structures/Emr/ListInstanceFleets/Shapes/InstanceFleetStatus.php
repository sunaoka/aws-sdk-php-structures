<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED' $State
 * @property InstanceFleetStateChangeReason $StateChangeReason
 * @property InstanceFleetTimeline $Timeline
 */
class InstanceFleetStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED',
     *     StateChangeReason?: InstanceFleetStateChangeReason,
     *     Timeline?: InstanceFleetTimeline
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

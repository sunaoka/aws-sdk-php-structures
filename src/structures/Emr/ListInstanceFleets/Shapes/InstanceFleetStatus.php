<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|null $State
 * @property InstanceFleetStateChangeReason|null $StateChangeReason
 * @property InstanceFleetTimeline|null $Timeline
 */
class InstanceFleetStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|null,
     *     StateChangeReason?: InstanceFleetStateChangeReason|null,
     *     Timeline?: InstanceFleetTimeline|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

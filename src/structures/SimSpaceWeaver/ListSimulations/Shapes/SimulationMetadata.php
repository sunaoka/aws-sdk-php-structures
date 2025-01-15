<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\ListSimulations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Name
 * @property 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED'|'SNAPSHOT_IN_PROGRESS'|null $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED'|'DELETED'|null $TargetStatus
 */
class SimulationMetadata extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     Status?: 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED'|'SNAPSHOT_IN_PROGRESS'|null,
     *     TargetStatus?: 'UNKNOWN'|'STARTED'|'STOPPED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

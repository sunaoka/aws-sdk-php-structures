<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\ListSimulations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Name
 * @property 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED'|'SNAPSHOT_IN_PROGRESS' $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED'|'DELETED' $TargetStatus
 */
class SimulationMetadata extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     Status?: 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED'|'SNAPSHOT_IN_PROGRESS',
     *     TargetStatus?: 'UNKNOWN'|'STARTED'|'STOPPED'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

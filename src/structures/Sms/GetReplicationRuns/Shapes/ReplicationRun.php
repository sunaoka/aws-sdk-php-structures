<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $replicationRunId
 * @property 'PENDING'|'MISSED'|'ACTIVE'|'FAILED'|'COMPLETED'|'DELETING'|'DELETED' $state
 * @property 'ON_DEMAND'|'AUTOMATIC' $type
 * @property ReplicationRunStageDetails $stageDetails
 * @property string $statusMessage
 * @property string $amiId
 * @property \Aws\Api\DateTimeResult $scheduledStartTime
 * @property \Aws\Api\DateTimeResult $completedTime
 * @property string $description
 * @property bool $encrypted
 * @property string $kmsKeyId
 */
class ReplicationRun extends Shape
{
    /**
     * @param array{
     *     replicationRunId?: string,
     *     state?: 'PENDING'|'MISSED'|'ACTIVE'|'FAILED'|'COMPLETED'|'DELETING'|'DELETED',
     *     type?: 'ON_DEMAND'|'AUTOMATIC',
     *     stageDetails?: ReplicationRunStageDetails,
     *     statusMessage?: string,
     *     amiId?: string,
     *     scheduledStartTime?: \Aws\Api\DateTimeResult,
     *     completedTime?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     encrypted?: bool,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $replicationRunId
 * @property 'PENDING'|'MISSED'|'ACTIVE'|'FAILED'|'COMPLETED'|'DELETING'|'DELETED'|null $state
 * @property 'ON_DEMAND'|'AUTOMATIC'|null $type
 * @property ReplicationRunStageDetails|null $stageDetails
 * @property string|null $statusMessage
 * @property string|null $amiId
 * @property \Aws\Api\DateTimeResult|null $scheduledStartTime
 * @property \Aws\Api\DateTimeResult|null $completedTime
 * @property string|null $description
 * @property bool|null $encrypted
 * @property string|null $kmsKeyId
 */
class ReplicationRun extends Shape
{
    /**
     * @param array{
     *     replicationRunId?: string|null,
     *     state?: 'PENDING'|'MISSED'|'ACTIVE'|'FAILED'|'COMPLETED'|'DELETING'|'DELETED'|null,
     *     type?: 'ON_DEMAND'|'AUTOMATIC'|null,
     *     stageDetails?: ReplicationRunStageDetails|null,
     *     statusMessage?: string|null,
     *     amiId?: string|null,
     *     scheduledStartTime?: \Aws\Api\DateTimeResult|null,
     *     completedTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     encrypted?: bool|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

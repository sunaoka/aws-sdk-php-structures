<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationTaskIdentifier
 * @property string|null $SourceEndpointArn
 * @property string|null $TargetEndpointArn
 * @property string|null $ReplicationInstanceArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc'|null $MigrationType
 * @property string|null $TableMappings
 * @property string|null $ReplicationTaskSettings
 * @property string|null $Status
 * @property string|null $LastFailureMessage
 * @property string|null $StopReason
 * @property \Aws\Api\DateTimeResult|null $ReplicationTaskCreationDate
 * @property \Aws\Api\DateTimeResult|null $ReplicationTaskStartDate
 * @property string|null $CdcStartPosition
 * @property string|null $CdcStopPosition
 * @property string|null $RecoveryCheckpoint
 * @property string|null $ReplicationTaskArn
 * @property ReplicationTaskStats|null $ReplicationTaskStats
 * @property string|null $TaskData
 * @property string|null $TargetReplicationInstanceArn
 */
class ReplicationTask extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskIdentifier?: string|null,
     *     SourceEndpointArn?: string|null,
     *     TargetEndpointArn?: string|null,
     *     ReplicationInstanceArn?: string|null,
     *     MigrationType?: 'full-load'|'cdc'|'full-load-and-cdc'|null,
     *     TableMappings?: string|null,
     *     ReplicationTaskSettings?: string|null,
     *     Status?: string|null,
     *     LastFailureMessage?: string|null,
     *     StopReason?: string|null,
     *     ReplicationTaskCreationDate?: \Aws\Api\DateTimeResult|null,
     *     ReplicationTaskStartDate?: \Aws\Api\DateTimeResult|null,
     *     CdcStartPosition?: string|null,
     *     CdcStopPosition?: string|null,
     *     RecoveryCheckpoint?: string|null,
     *     ReplicationTaskArn?: string|null,
     *     ReplicationTaskStats?: ReplicationTaskStats|null,
     *     TaskData?: string|null,
     *     TargetReplicationInstanceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

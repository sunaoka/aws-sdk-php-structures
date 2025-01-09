<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationTaskIdentifier
 * @property string $SourceEndpointArn
 * @property string $TargetEndpointArn
 * @property string $ReplicationInstanceArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $MigrationType
 * @property string $TableMappings
 * @property string $ReplicationTaskSettings
 * @property string $Status
 * @property string $LastFailureMessage
 * @property string $StopReason
 * @property \Aws\Api\DateTimeResult $ReplicationTaskCreationDate
 * @property \Aws\Api\DateTimeResult $ReplicationTaskStartDate
 * @property string $CdcStartPosition
 * @property string $CdcStopPosition
 * @property string $RecoveryCheckpoint
 * @property string $ReplicationTaskArn
 * @property ReplicationTaskStats $ReplicationTaskStats
 * @property string $TaskData
 * @property string $TargetReplicationInstanceArn
 */
class ReplicationTask extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskIdentifier?: string,
     *     SourceEndpointArn?: string,
     *     TargetEndpointArn?: string,
     *     ReplicationInstanceArn?: string,
     *     MigrationType?: 'full-load'|'cdc'|'full-load-and-cdc',
     *     TableMappings?: string,
     *     ReplicationTaskSettings?: string,
     *     Status?: string,
     *     LastFailureMessage?: string,
     *     StopReason?: string,
     *     ReplicationTaskCreationDate?: \Aws\Api\DateTimeResult,
     *     ReplicationTaskStartDate?: \Aws\Api\DateTimeResult,
     *     CdcStartPosition?: string,
     *     CdcStopPosition?: string,
     *     RecoveryCheckpoint?: string,
     *     ReplicationTaskArn?: string,
     *     ReplicationTaskStats?: ReplicationTaskStats,
     *     TaskData?: string,
     *     TargetReplicationInstanceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

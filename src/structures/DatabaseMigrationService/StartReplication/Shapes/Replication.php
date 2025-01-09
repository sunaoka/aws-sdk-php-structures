<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationConfigIdentifier
 * @property string $ReplicationConfigArn
 * @property string $SourceEndpointArn
 * @property string $TargetEndpointArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $ReplicationType
 * @property string $Status
 * @property ProvisionData $ProvisionData
 * @property string $StopReason
 * @property list<string> $FailureMessages
 * @property ReplicationStats $ReplicationStats
 * @property string $StartReplicationType
 * @property \Aws\Api\DateTimeResult $CdcStartTime
 * @property string $CdcStartPosition
 * @property string $CdcStopPosition
 * @property string $RecoveryCheckpoint
 * @property \Aws\Api\DateTimeResult $ReplicationCreateTime
 * @property \Aws\Api\DateTimeResult $ReplicationUpdateTime
 * @property \Aws\Api\DateTimeResult $ReplicationLastStopTime
 * @property \Aws\Api\DateTimeResult $ReplicationDeprovisionTime
 */
class Replication extends Shape
{
    /**
     * @param array{
     *     ReplicationConfigIdentifier?: string,
     *     ReplicationConfigArn?: string,
     *     SourceEndpointArn?: string,
     *     TargetEndpointArn?: string,
     *     ReplicationType?: 'full-load'|'cdc'|'full-load-and-cdc',
     *     Status?: string,
     *     ProvisionData?: ProvisionData,
     *     StopReason?: string,
     *     FailureMessages?: list<string>,
     *     ReplicationStats?: ReplicationStats,
     *     StartReplicationType?: string,
     *     CdcStartTime?: \Aws\Api\DateTimeResult,
     *     CdcStartPosition?: string,
     *     CdcStopPosition?: string,
     *     RecoveryCheckpoint?: string,
     *     ReplicationCreateTime?: \Aws\Api\DateTimeResult,
     *     ReplicationUpdateTime?: \Aws\Api\DateTimeResult,
     *     ReplicationLastStopTime?: \Aws\Api\DateTimeResult,
     *     ReplicationDeprovisionTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationConfigIdentifier
 * @property string|null $ReplicationConfigArn
 * @property string|null $SourceEndpointArn
 * @property string|null $TargetEndpointArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc'|null $ReplicationType
 * @property string|null $Status
 * @property ProvisionData|null $ProvisionData
 * @property list<PremigrationAssessmentStatus>|null $PremigrationAssessmentStatuses
 * @property string|null $StopReason
 * @property list<string>|null $FailureMessages
 * @property ReplicationStats|null $ReplicationStats
 * @property string|null $StartReplicationType
 * @property \Aws\Api\DateTimeResult|null $CdcStartTime
 * @property string|null $CdcStartPosition
 * @property string|null $CdcStopPosition
 * @property string|null $RecoveryCheckpoint
 * @property \Aws\Api\DateTimeResult|null $ReplicationCreateTime
 * @property \Aws\Api\DateTimeResult|null $ReplicationUpdateTime
 * @property \Aws\Api\DateTimeResult|null $ReplicationLastStopTime
 * @property \Aws\Api\DateTimeResult|null $ReplicationDeprovisionTime
 * @property bool|null $IsReadOnly
 */
class Replication extends Shape
{
    /**
     * @param array{
     *     ReplicationConfigIdentifier?: string|null,
     *     ReplicationConfigArn?: string|null,
     *     SourceEndpointArn?: string|null,
     *     TargetEndpointArn?: string|null,
     *     ReplicationType?: 'full-load'|'cdc'|'full-load-and-cdc'|null,
     *     Status?: string|null,
     *     ProvisionData?: ProvisionData|null,
     *     PremigrationAssessmentStatuses?: list<PremigrationAssessmentStatus>|null,
     *     StopReason?: string|null,
     *     FailureMessages?: list<string>|null,
     *     ReplicationStats?: ReplicationStats|null,
     *     StartReplicationType?: string|null,
     *     CdcStartTime?: \Aws\Api\DateTimeResult|null,
     *     CdcStartPosition?: string|null,
     *     CdcStopPosition?: string|null,
     *     RecoveryCheckpoint?: string|null,
     *     ReplicationCreateTime?: \Aws\Api\DateTimeResult|null,
     *     ReplicationUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     ReplicationLastStopTime?: \Aws\Api\DateTimeResult|null,
     *     ReplicationDeprovisionTime?: \Aws\Api\DateTimeResult|null,
     *     IsReadOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ec2InstanceID
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'SHUTTING-DOWN'|'TERMINATED'|'NOT_FOUND'|null $ec2InstanceState
 * @property string|null $jobID
 * @property string|null $recoveryInstanceID
 * @property string|null $sourceServerID
 * @property string|null $arn
 * @property array<string, string>|null $tags
 * @property RecoveryInstanceFailback|null $failback
 * @property RecoveryInstanceDataReplicationInfo|null $dataReplicationInfo
 * @property RecoveryInstanceProperties|null $recoveryInstanceProperties
 * @property string|null $pointInTimeSnapshotDateTime
 * @property bool|null $isDrill
 * @property 'ON_PREMISES'|'AWS'|null $originEnvironment
 * @property string|null $originAvailabilityZone
 * @property string|null $agentVersion
 * @property string|null $sourceOutpostArn
 */
class RecoveryInstance extends Shape
{
    /**
     * @param array{
     *     ec2InstanceID?: string|null,
     *     ec2InstanceState?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'SHUTTING-DOWN'|'TERMINATED'|'NOT_FOUND'|null,
     *     jobID?: string|null,
     *     recoveryInstanceID?: string|null,
     *     sourceServerID?: string|null,
     *     arn?: string|null,
     *     tags?: array<string, string>|null,
     *     failback?: RecoveryInstanceFailback|null,
     *     dataReplicationInfo?: RecoveryInstanceDataReplicationInfo|null,
     *     recoveryInstanceProperties?: RecoveryInstanceProperties|null,
     *     pointInTimeSnapshotDateTime?: string|null,
     *     isDrill?: bool|null,
     *     originEnvironment?: 'ON_PREMISES'|'AWS'|null,
     *     originAvailabilityZone?: string|null,
     *     agentVersion?: string|null,
     *     sourceOutpostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

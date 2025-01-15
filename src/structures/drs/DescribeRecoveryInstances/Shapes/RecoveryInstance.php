<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentVersion
 * @property string|null $arn
 * @property RecoveryInstanceDataReplicationInfo|null $dataReplicationInfo
 * @property string|null $ec2InstanceID
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'SHUTTING-DOWN'|'TERMINATED'|'NOT_FOUND'|null $ec2InstanceState
 * @property RecoveryInstanceFailback|null $failback
 * @property bool|null $isDrill
 * @property string|null $jobID
 * @property string|null $originAvailabilityZone
 * @property 'ON_PREMISES'|'AWS'|null $originEnvironment
 * @property string|null $pointInTimeSnapshotDateTime
 * @property string|null $recoveryInstanceID
 * @property RecoveryInstanceProperties|null $recoveryInstanceProperties
 * @property string|null $sourceOutpostArn
 * @property string|null $sourceServerID
 * @property array<string, string>|null $tags
 */
class RecoveryInstance extends Shape
{
    /**
     * @param array{
     *     agentVersion?: string|null,
     *     arn?: string|null,
     *     dataReplicationInfo?: RecoveryInstanceDataReplicationInfo|null,
     *     ec2InstanceID?: string|null,
     *     ec2InstanceState?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'SHUTTING-DOWN'|'TERMINATED'|'NOT_FOUND'|null,
     *     failback?: RecoveryInstanceFailback|null,
     *     isDrill?: bool|null,
     *     jobID?: string|null,
     *     originAvailabilityZone?: string|null,
     *     originEnvironment?: 'ON_PREMISES'|'AWS'|null,
     *     pointInTimeSnapshotDateTime?: string|null,
     *     recoveryInstanceID?: string|null,
     *     recoveryInstanceProperties?: RecoveryInstanceProperties|null,
     *     sourceOutpostArn?: string|null,
     *     sourceServerID?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

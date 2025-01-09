<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentVersion
 * @property string $arn
 * @property RecoveryInstanceDataReplicationInfo $dataReplicationInfo
 * @property string $ec2InstanceID
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'SHUTTING-DOWN'|'TERMINATED'|'NOT_FOUND' $ec2InstanceState
 * @property RecoveryInstanceFailback $failback
 * @property bool $isDrill
 * @property string $jobID
 * @property string $originAvailabilityZone
 * @property 'ON_PREMISES'|'AWS' $originEnvironment
 * @property string $pointInTimeSnapshotDateTime
 * @property string $recoveryInstanceID
 * @property RecoveryInstanceProperties $recoveryInstanceProperties
 * @property string $sourceOutpostArn
 * @property string $sourceServerID
 * @property array<string, string> $tags
 */
class RecoveryInstance extends Shape
{
    /**
     * @param array{
     *     agentVersion?: string,
     *     arn?: string,
     *     dataReplicationInfo?: RecoveryInstanceDataReplicationInfo,
     *     ec2InstanceID?: string,
     *     ec2InstanceState?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'SHUTTING-DOWN'|'TERMINATED'|'NOT_FOUND',
     *     failback?: RecoveryInstanceFailback,
     *     isDrill?: bool,
     *     jobID?: string,
     *     originAvailabilityZone?: string,
     *     originEnvironment?: 'ON_PREMISES'|'AWS',
     *     pointInTimeSnapshotDateTime?: string,
     *     recoveryInstanceID?: string,
     *     recoveryInstanceProperties?: RecoveryInstanceProperties,
     *     sourceOutpostArn?: string,
     *     sourceServerID?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

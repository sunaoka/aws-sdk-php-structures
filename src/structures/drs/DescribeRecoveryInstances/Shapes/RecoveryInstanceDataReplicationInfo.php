<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecoveryInstanceDataReplicationError $dataReplicationError
 * @property RecoveryInstanceDataReplicationInitiation $dataReplicationInitiation
 * @property 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'REPLICATION_STATE_NOT_AVAILABLE'|'NOT_STARTED' $dataReplicationState
 * @property string $etaDateTime
 * @property string $lagDuration
 * @property list<RecoveryInstanceDataReplicationInfoReplicatedDisk> $replicatedDisks
 * @property string $stagingAvailabilityZone
 * @property string $stagingOutpostArn
 */
class RecoveryInstanceDataReplicationInfo extends Shape
{
    /**
     * @param array{
     *     dataReplicationError?: RecoveryInstanceDataReplicationError,
     *     dataReplicationInitiation?: RecoveryInstanceDataReplicationInitiation,
     *     dataReplicationState?: 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'REPLICATION_STATE_NOT_AVAILABLE'|'NOT_STARTED',
     *     etaDateTime?: string,
     *     lagDuration?: string,
     *     replicatedDisks?: list<RecoveryInstanceDataReplicationInfoReplicatedDisk>,
     *     stagingAvailabilityZone?: string,
     *     stagingOutpostArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

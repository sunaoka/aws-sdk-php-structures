<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lagDuration
 * @property string|null $etaDateTime
 * @property list<RecoveryInstanceDataReplicationInfoReplicatedDisk>|null $replicatedDisks
 * @property 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'REPLICATION_STATE_NOT_AVAILABLE'|'NOT_STARTED'|null $dataReplicationState
 * @property RecoveryInstanceDataReplicationInitiation|null $dataReplicationInitiation
 * @property RecoveryInstanceDataReplicationError|null $dataReplicationError
 * @property string|null $stagingAvailabilityZone
 * @property string|null $stagingOutpostArn
 */
class RecoveryInstanceDataReplicationInfo extends Shape
{
    /**
     * @param array{
     *     lagDuration?: string|null,
     *     etaDateTime?: string|null,
     *     replicatedDisks?: list<RecoveryInstanceDataReplicationInfoReplicatedDisk>|null,
     *     dataReplicationState?: 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'REPLICATION_STATE_NOT_AVAILABLE'|'NOT_STARTED'|null,
     *     dataReplicationInitiation?: RecoveryInstanceDataReplicationInitiation|null,
     *     dataReplicationError?: RecoveryInstanceDataReplicationError|null,
     *     stagingAvailabilityZone?: string|null,
     *     stagingOutpostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecoveryInstanceDataReplicationError|null $dataReplicationError
 * @property RecoveryInstanceDataReplicationInitiation|null $dataReplicationInitiation
 * @property 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'REPLICATION_STATE_NOT_AVAILABLE'|'NOT_STARTED'|null $dataReplicationState
 * @property string|null $etaDateTime
 * @property string|null $lagDuration
 * @property list<RecoveryInstanceDataReplicationInfoReplicatedDisk>|null $replicatedDisks
 * @property string|null $stagingAvailabilityZone
 * @property string|null $stagingOutpostArn
 */
class RecoveryInstanceDataReplicationInfo extends Shape
{
    /**
     * @param array{
     *     dataReplicationError?: RecoveryInstanceDataReplicationError|null,
     *     dataReplicationInitiation?: RecoveryInstanceDataReplicationInitiation|null,
     *     dataReplicationState?: 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'REPLICATION_STATE_NOT_AVAILABLE'|'NOT_STARTED'|null,
     *     etaDateTime?: string|null,
     *     lagDuration?: string|null,
     *     replicatedDisks?: list<RecoveryInstanceDataReplicationInfoReplicatedDisk>|null,
     *     stagingAvailabilityZone?: string|null,
     *     stagingOutpostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

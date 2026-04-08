<?php

namespace Sunaoka\Aws\Structures\drs\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lagDuration
 * @property string|null $etaDateTime
 * @property list<DataReplicationInfoReplicatedDisk>|null $replicatedDisks
 * @property 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|null $dataReplicationState
 * @property DataReplicationInitiation|null $dataReplicationInitiation
 * @property DataReplicationError|null $dataReplicationError
 * @property string|null $stagingAvailabilityZone
 * @property string|null $stagingOutpostArn
 */
class DataReplicationInfo extends Shape
{
    /**
     * @param array{
     *     lagDuration?: string|null,
     *     etaDateTime?: string|null,
     *     replicatedDisks?: list<DataReplicationInfoReplicatedDisk>|null,
     *     dataReplicationState?: 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|null,
     *     dataReplicationInitiation?: DataReplicationInitiation|null,
     *     dataReplicationError?: DataReplicationError|null,
     *     stagingAvailabilityZone?: string|null,
     *     stagingOutpostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

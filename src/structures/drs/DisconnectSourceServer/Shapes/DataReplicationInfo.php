<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataReplicationError|null $dataReplicationError
 * @property DataReplicationInitiation|null $dataReplicationInitiation
 * @property 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|null $dataReplicationState
 * @property string|null $etaDateTime
 * @property string|null $lagDuration
 * @property list<DataReplicationInfoReplicatedDisk>|null $replicatedDisks
 * @property string|null $stagingAvailabilityZone
 * @property string|null $stagingOutpostArn
 */
class DataReplicationInfo extends Shape
{
    /**
     * @param array{
     *     dataReplicationError?: DataReplicationError|null,
     *     dataReplicationInitiation?: DataReplicationInitiation|null,
     *     dataReplicationState?: 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|null,
     *     etaDateTime?: string|null,
     *     lagDuration?: string|null,
     *     replicatedDisks?: list<DataReplicationInfoReplicatedDisk>|null,
     *     stagingAvailabilityZone?: string|null,
     *     stagingOutpostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

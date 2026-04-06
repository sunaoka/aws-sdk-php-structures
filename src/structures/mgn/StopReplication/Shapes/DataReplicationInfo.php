<?php

namespace Sunaoka\Aws\Structures\mgn\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataReplicationError|null $dataReplicationError
 * @property DataReplicationInitiation|null $dataReplicationInitiation
 * @property 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'PENDING_SNAPSHOT_SHIPPING'|'SHIPPING_SNAPSHOT'|null $dataReplicationState
 * @property string|null $etaDateTime
 * @property string|null $lagDuration
 * @property string|null $lastSnapshotDateTime
 * @property list<DataReplicationInfoReplicatedDisk>|null $replicatedDisks
 */
class DataReplicationInfo extends Shape
{
    /**
     * @param array{
     *     dataReplicationError?: DataReplicationError|null,
     *     dataReplicationInitiation?: DataReplicationInitiation|null,
     *     dataReplicationState?: 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'PENDING_SNAPSHOT_SHIPPING'|'SHIPPING_SNAPSHOT'|null,
     *     etaDateTime?: string|null,
     *     lagDuration?: string|null,
     *     lastSnapshotDateTime?: string|null,
     *     replicatedDisks?: list<DataReplicationInfoReplicatedDisk>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

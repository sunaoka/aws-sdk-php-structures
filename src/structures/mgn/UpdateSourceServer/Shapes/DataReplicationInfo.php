<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataReplicationError $dataReplicationError
 * @property DataReplicationInitiation $dataReplicationInitiation
 * @property 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'PENDING_SNAPSHOT_SHIPPING'|'SHIPPING_SNAPSHOT' $dataReplicationState
 * @property string $etaDateTime
 * @property string $lagDuration
 * @property string $lastSnapshotDateTime
 * @property list<DataReplicationInfoReplicatedDisk> $replicatedDisks
 */
class DataReplicationInfo extends Shape
{
    /**
     * @param array{
     *     dataReplicationError?: DataReplicationError,
     *     dataReplicationInitiation?: DataReplicationInitiation,
     *     dataReplicationState?: 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED'|'PENDING_SNAPSHOT_SHIPPING'|'SHIPPING_SNAPSHOT',
     *     etaDateTime?: string,
     *     lagDuration?: string,
     *     lastSnapshotDateTime?: string,
     *     replicatedDisks?: list<DataReplicationInfoReplicatedDisk>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

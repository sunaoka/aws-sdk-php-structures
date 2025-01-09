<?php

namespace Sunaoka\Aws\Structures\drs\RetryDataReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataReplicationError $dataReplicationError
 * @property DataReplicationInitiation $dataReplicationInitiation
 * @property 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED' $dataReplicationState
 * @property string $etaDateTime
 * @property string $lagDuration
 * @property list<DataReplicationInfoReplicatedDisk> $replicatedDisks
 * @property string $stagingAvailabilityZone
 * @property string $stagingOutpostArn
 */
class DataReplicationInfo extends Shape
{
    /**
     * @param array{
     *     dataReplicationError?: DataReplicationError,
     *     dataReplicationInitiation?: DataReplicationInitiation,
     *     dataReplicationState?: 'STOPPED'|'INITIATING'|'INITIAL_SYNC'|'BACKLOG'|'CREATING_SNAPSHOT'|'CONTINUOUS'|'PAUSED'|'RESCAN'|'STALLED'|'DISCONNECTED',
     *     etaDateTime?: string,
     *     lagDuration?: string,
     *     replicatedDisks?: list<DataReplicationInfoReplicatedDisk>,
     *     stagingAvailabilityZone?: string,
     *     stagingOutpostArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

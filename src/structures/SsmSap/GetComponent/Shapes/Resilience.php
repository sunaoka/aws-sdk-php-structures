<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HsrTier
 * @property 'PRIMARY'|'NONE'|'SYNC'|'SYNCMEM'|'ASYNC' $HsrReplicationMode
 * @property 'PRIMARY'|'LOGREPLAY'|'DELTA_DATASHIPPING'|'LOGREPLAY_READACCESS'|'NONE' $HsrOperationMode
 * @property 'ONLINE'|'STANDBY'|'MAINTENANCE'|'OFFLINE'|'NONE' $ClusterStatus
 * @property bool $EnqueueReplication
 */
class Resilience extends Shape
{
    /**
     * @param array{
     *     HsrTier?: string,
     *     HsrReplicationMode?: 'PRIMARY'|'NONE'|'SYNC'|'SYNCMEM'|'ASYNC',
     *     HsrOperationMode?: 'PRIMARY'|'LOGREPLAY'|'DELTA_DATASHIPPING'|'LOGREPLAY_READACCESS'|'NONE',
     *     ClusterStatus?: 'ONLINE'|'STANDBY'|'MAINTENANCE'|'OFFLINE'|'NONE',
     *     EnqueueReplication?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

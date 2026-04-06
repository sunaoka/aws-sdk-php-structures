<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HsrTier
 * @property 'PRIMARY'|'NONE'|'SYNC'|'SYNCMEM'|'ASYNC'|null $HsrReplicationMode
 * @property 'PRIMARY'|'LOGREPLAY'|'DELTA_DATASHIPPING'|'LOGREPLAY_READACCESS'|'NONE'|null $HsrOperationMode
 * @property 'ONLINE'|'STANDBY'|'MAINTENANCE'|'OFFLINE'|'NONE'|null $ClusterStatus
 * @property bool|null $EnqueueReplication
 */
class Resilience extends Shape
{
    /**
     * @param array{
     *     HsrTier?: string|null,
     *     HsrReplicationMode?: 'PRIMARY'|'NONE'|'SYNC'|'SYNCMEM'|'ASYNC'|null,
     *     HsrOperationMode?: 'PRIMARY'|'LOGREPLAY'|'DELTA_DATASHIPPING'|'LOGREPLAY_READACCESS'|'NONE'|null,
     *     ClusterStatus?: 'ONLINE'|'STANDBY'|'MAINTENANCE'|'OFFLINE'|'NONE'|null,
     *     EnqueueReplication?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

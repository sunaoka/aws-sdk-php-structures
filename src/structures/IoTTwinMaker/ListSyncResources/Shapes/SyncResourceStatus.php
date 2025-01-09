<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZING'|'PROCESSING'|'DELETED'|'IN_SYNC'|'ERROR' $state
 * @property ErrorDetails $error
 */
class SyncResourceStatus extends Shape
{
    /**
     * @param array{
     *     state?: 'INITIALIZING'|'PROCESSING'|'DELETED'|'IN_SYNC'|'ERROR',
     *     error?: ErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

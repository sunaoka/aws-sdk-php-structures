<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZING'|'PROCESSING'|'DELETED'|'IN_SYNC'|'ERROR'|null $state
 * @property ErrorDetails|null $error
 */
class SyncResourceStatus extends Shape
{
    /**
     * @param array{
     *     state?: 'INITIALIZING'|'PROCESSING'|'DELETED'|'IN_SYNC'|'ERROR'|null,
     *     error?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

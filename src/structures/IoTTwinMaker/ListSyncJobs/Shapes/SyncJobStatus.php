<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'INITIALIZING'|'ACTIVE'|'DELETING'|'ERROR'|null $state
 * @property ErrorDetails|null $error
 */
class SyncJobStatus extends Shape
{
    /**
     * @param array{
     *     state?: 'CREATING'|'INITIALIZING'|'ACTIVE'|'DELETING'|'ERROR'|null,
     *     error?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

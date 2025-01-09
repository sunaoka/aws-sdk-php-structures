<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'INITIALIZING'|'ACTIVE'|'DELETING'|'ERROR' $state
 * @property ErrorDetails $error
 */
class SyncJobStatus extends Shape
{
    /**
     * @param array{
     *     state?: 'CREATING'|'INITIALIZING'|'ACTIVE'|'DELETING'|'ERROR',
     *     error?: ErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

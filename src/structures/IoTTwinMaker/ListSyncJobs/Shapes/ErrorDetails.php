<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|'SYNC_INITIALIZING_ERROR'|'SYNC_CREATING_ERROR'|'SYNC_PROCESSING_ERROR'|'SYNC_DELETING_ERROR'|'PROCESSING_ERROR'|'COMPOSITE_COMPONENT_FAILURE'|null $code
 * @property string|null $message
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     code?: 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|'SYNC_INITIALIZING_ERROR'|'SYNC_CREATING_ERROR'|'SYNC_PROCESSING_ERROR'|'SYNC_DELETING_ERROR'|'PROCESSING_ERROR'|'COMPOSITE_COMPONENT_FAILURE'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

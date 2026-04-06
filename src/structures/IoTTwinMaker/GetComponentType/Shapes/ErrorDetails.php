<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|'SYNC_INITIALIZING_ERROR'|'SYNC_CREATING_ERROR'|'SYNC_PROCESSING_ERROR'|null $code
 * @property string|null $message
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     code?: 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|'SYNC_INITIALIZING_ERROR'|'SYNC_CREATING_ERROR'|'SYNC_PROCESSING_ERROR'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

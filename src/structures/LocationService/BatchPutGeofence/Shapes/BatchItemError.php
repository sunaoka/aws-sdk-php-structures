<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDeniedError'|'ConflictError'|'InternalServerError'|'ResourceNotFoundError'|'ThrottlingError'|'ValidationError'|null $Code
 * @property string|null $Message
 */
class BatchItemError extends Shape
{
    /**
     * @param array{
     *     Code?: 'AccessDeniedError'|'ConflictError'|'InternalServerError'|'ResourceNotFoundError'|'ThrottlingError'|'ValidationError'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

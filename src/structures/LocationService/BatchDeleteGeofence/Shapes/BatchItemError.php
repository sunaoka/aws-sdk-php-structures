<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchDeleteGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDeniedError'|'ConflictError'|'InternalServerError'|'ResourceNotFoundError'|'ThrottlingError'|'ValidationError' $Code
 * @property string $Message
 */
class BatchItemError extends Shape
{
    /**
     * @param array{
     *     Code?: 'AccessDeniedError'|'ConflictError'|'InternalServerError'|'ResourceNotFoundError'|'ThrottlingError'|'ValidationError',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

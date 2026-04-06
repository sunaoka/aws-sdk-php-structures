<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchItemError $Error
 * @property string $GeofenceId
 */
class BatchPutGeofenceError extends Shape
{
    /**
     * @param array{
     *     Error: BatchItemError,
     *     GeofenceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

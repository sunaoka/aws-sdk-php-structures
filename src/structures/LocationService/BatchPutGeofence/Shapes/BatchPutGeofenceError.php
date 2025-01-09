<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeofenceId
 * @property BatchItemError $Error
 */
class BatchPutGeofenceError extends Shape
{
    /**
     * @param array{
     *     GeofenceId: string,
     *     Error: BatchItemError
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

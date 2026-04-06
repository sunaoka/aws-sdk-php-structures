<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeofenceId
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class BatchPutGeofenceSuccess extends Shape
{
    /**
     * @param array{
     *     GeofenceId: string,
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $GeofenceId
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class BatchPutGeofenceSuccess extends Shape
{
    /**
     * @param array{
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     GeofenceId: string,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

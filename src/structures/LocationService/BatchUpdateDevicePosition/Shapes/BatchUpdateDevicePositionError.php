<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchUpdateDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property BatchItemError $Error
 * @property \Aws\Api\DateTimeResult $SampleTime
 */
class BatchUpdateDevicePositionError extends Shape
{
    /**
     * @param array{
     *     DeviceId: string,
     *     Error: BatchItemError,
     *     SampleTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

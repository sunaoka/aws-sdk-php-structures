<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchEvaluateGeofences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property BatchItemError $Error
 */
class BatchEvaluateGeofencesError extends Shape
{
    /**
     * @param array{
     *     DeviceId: string,
     *     SampleTime: \Aws\Api\DateTimeResult,
     *     Error: BatchItemError
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

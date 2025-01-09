<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class TimeRangeFilterOutput extends Shape
{
    /**
     * @param array{
     *     EndTime: \Aws\Api\DateTimeResult,
     *     StartTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

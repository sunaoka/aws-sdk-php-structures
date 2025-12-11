<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $referenceEpoch
 * @property ISO8601TimeRange $validTimeRange
 * @property list<TimeAzEl> $azElList
 */
class AzElSegment extends Shape
{
    /**
     * @param array{
     *     referenceEpoch: \Aws\Api\DateTimeResult,
     *     validTimeRange: ISO8601TimeRange,
     *     azElList: list<TimeAzEl>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

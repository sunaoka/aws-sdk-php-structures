<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'HOURLY'|'DAILY' $granularity
 * @property list<QueryDataPoint> $dataPoints
 */
class QueryRange extends Shape
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     granularity: 'HOURLY'|'DAILY',
     *     dataPoints: list<QueryDataPoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

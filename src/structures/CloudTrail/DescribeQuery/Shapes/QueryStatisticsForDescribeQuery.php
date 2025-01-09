<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DescribeQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EventsMatched
 * @property int $EventsScanned
 * @property int $BytesScanned
 * @property int $ExecutionTimeInMillis
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class QueryStatisticsForDescribeQuery extends Shape
{
    /**
     * @param array{
     *     EventsMatched?: int,
     *     EventsScanned?: int,
     *     BytesScanned?: int,
     *     ExecutionTimeInMillis?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DescribeQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $EventsMatched
 * @property int|null $EventsScanned
 * @property int|null $BytesScanned
 * @property int|null $ExecutionTimeInMillis
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class QueryStatisticsForDescribeQuery extends Shape
{
    /**
     * @param array{
     *     EventsMatched?: int|null,
     *     EventsScanned?: int|null,
     *     BytesScanned?: int|null,
     *     ExecutionTimeInMillis?: int|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

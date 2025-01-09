<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalCount
 * @property int $SucceededCount
 * @property int $FailedCount
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property int $ReleasedCapacity
 */
class DataRepositoryTaskStatus extends Shape
{
    /**
     * @param array{
     *     TotalCount?: int,
     *     SucceededCount?: int,
     *     FailedCount?: int,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     ReleasedCapacity?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

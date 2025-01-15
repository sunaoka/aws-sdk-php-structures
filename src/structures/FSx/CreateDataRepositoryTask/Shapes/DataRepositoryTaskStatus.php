<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalCount
 * @property int|null $SucceededCount
 * @property int|null $FailedCount
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property int|null $ReleasedCapacity
 */
class DataRepositoryTaskStatus extends Shape
{
    /**
     * @param array{
     *     TotalCount?: int|null,
     *     SucceededCount?: int|null,
     *     FailedCount?: int|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     ReleasedCapacity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

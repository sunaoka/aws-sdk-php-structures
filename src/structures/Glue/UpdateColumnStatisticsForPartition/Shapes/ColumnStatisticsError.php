<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnStatistics $ColumnStatistics
 * @property ErrorDetail $Error
 */
class ColumnStatisticsError extends Shape
{
    /**
     * @param array{
     *     ColumnStatistics?: ColumnStatistics,
     *     Error?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

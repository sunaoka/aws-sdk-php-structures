<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnStatistics|null $ColumnStatistics
 * @property ErrorDetail|null $Error
 */
class ColumnStatisticsError extends Shape
{
    /**
     * @param array{
     *     ColumnStatistics?: ColumnStatistics|null,
     *     Error?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

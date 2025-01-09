<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property ErrorDetail $Error
 */
class ColumnError extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string,
     *     Error?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

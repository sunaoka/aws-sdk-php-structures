<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ColumnName
 * @property string|null $ColumnFormat
 */
class TimestampColumn extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string|null,
     *     ColumnFormat?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

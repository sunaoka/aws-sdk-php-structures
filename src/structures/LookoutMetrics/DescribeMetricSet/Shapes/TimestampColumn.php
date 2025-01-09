<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property string $ColumnFormat
 */
class TimestampColumn extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string,
     *     ColumnFormat?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

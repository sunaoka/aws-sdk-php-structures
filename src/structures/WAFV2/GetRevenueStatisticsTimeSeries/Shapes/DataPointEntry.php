<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatisticsTimeSeries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Date
 * @property int<0, max>|null $MonetizeServedCount
 * @property int<0, max>|null $SettledCount
 * @property string|null $TotalAmount
 * @property string|null $Category
 * @property string|null $Intent
 * @property string|null $GroupByValue
 */
class DataPointEntry extends Shape
{
    /**
     * @param array{
     *     Date?: \Aws\Api\DateTimeResult|null,
     *     MonetizeServedCount?: int<0, max>|null,
     *     SettledCount?: int<0, max>|null,
     *     TotalAmount?: string|null,
     *     Category?: string|null,
     *     Intent?: string|null,
     *     GroupByValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

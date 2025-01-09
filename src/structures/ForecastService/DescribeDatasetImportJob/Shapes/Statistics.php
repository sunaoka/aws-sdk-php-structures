<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDatasetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property int $CountDistinct
 * @property int $CountNull
 * @property int $CountNan
 * @property string $Min
 * @property string $Max
 * @property double $Avg
 * @property double $Stddev
 * @property int $CountLong
 * @property int $CountDistinctLong
 * @property int $CountNullLong
 * @property int $CountNanLong
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     CountDistinct?: int,
     *     CountNull?: int,
     *     CountNan?: int,
     *     Min?: string,
     *     Max?: string,
     *     Avg?: double,
     *     Stddev?: double,
     *     CountLong?: int,
     *     CountDistinctLong?: int,
     *     CountNullLong?: int,
     *     CountNanLong?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

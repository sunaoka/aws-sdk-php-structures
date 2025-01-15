<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDatasetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property int|null $CountDistinct
 * @property int|null $CountNull
 * @property int|null $CountNan
 * @property string|null $Min
 * @property string|null $Max
 * @property double|null $Avg
 * @property double|null $Stddev
 * @property int|null $CountLong
 * @property int|null $CountDistinctLong
 * @property int|null $CountNullLong
 * @property int|null $CountNanLong
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     CountDistinct?: int|null,
     *     CountNull?: int|null,
     *     CountNan?: int|null,
     *     Min?: string|null,
     *     Max?: string|null,
     *     Avg?: double|null,
     *     Stddev?: double|null,
     *     CountLong?: int|null,
     *     CountDistinctLong?: int|null,
     *     CountNullLong?: int|null,
     *     CountNanLong?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

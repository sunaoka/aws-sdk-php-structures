<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HISTORICAL'|'FORECAST' $AutoAdjustType
 * @property HistoricalOptions|null $HistoricalOptions
 * @property \Aws\Api\DateTimeResult|null $LastAutoAdjustTime
 */
class AutoAdjustData extends Shape
{
    /**
     * @param array{
     *     AutoAdjustType: 'HISTORICAL'|'FORECAST',
     *     HistoricalOptions?: HistoricalOptions|null,
     *     LastAutoAdjustTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

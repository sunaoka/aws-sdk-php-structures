<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HISTORICAL'|'FORECAST' $AutoAdjustType
 * @property HistoricalOptions $HistoricalOptions
 * @property \Aws\Api\DateTimeResult $LastAutoAdjustTime
 */
class AutoAdjustData extends Shape
{
    /**
     * @param array{
     *     AutoAdjustType: 'HISTORICAL'|'FORECAST',
     *     HistoricalOptions?: HistoricalOptions,
     *     LastAutoAdjustTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property double $Percentage
 * @property string $Amount
 * @property int<0, max> $RequestCount
 */
class RevenuePathStatistics extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     Percentage: double,
     *     Amount: string,
     *     RequestCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

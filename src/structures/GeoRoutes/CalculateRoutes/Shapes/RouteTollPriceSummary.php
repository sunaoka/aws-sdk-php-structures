<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Currency
 * @property bool $Estimate
 * @property bool $Range
 * @property RouteTollPriceValueRange $RangeValue
 * @property double $Value
 */
class RouteTollPriceSummary extends Shape
{
    /**
     * @param array{
     *     Currency: string,
     *     Estimate: bool,
     *     Range: bool,
     *     RangeValue?: RouteTollPriceValueRange,
     *     Value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Currency
 * @property bool $Estimate
 * @property int $PerDuration
 * @property bool $Range
 * @property RouteTollPriceValueRange $RangeValue
 * @property double $Value
 */
class RouteTollPrice extends Shape
{
    /**
     * @param array{
     *     Currency: string,
     *     Estimate: bool,
     *     PerDuration?: int,
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

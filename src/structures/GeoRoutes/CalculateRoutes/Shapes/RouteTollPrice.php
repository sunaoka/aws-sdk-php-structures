<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Currency
 * @property bool $Estimate
 * @property int<0, 4294967295>|null $PerDuration
 * @property bool $Range
 * @property RouteTollPriceValueRange|null $RangeValue
 * @property double $Value
 */
class RouteTollPrice extends Shape
{
    /**
     * @param array{
     *     Currency: string,
     *     Estimate: bool,
     *     PerDuration?: int<0, 4294967295>|null,
     *     Range: bool,
     *     RangeValue?: RouteTollPriceValueRange|null,
     *     Value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

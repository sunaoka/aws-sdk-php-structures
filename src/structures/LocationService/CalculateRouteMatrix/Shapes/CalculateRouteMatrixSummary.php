<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSource
 * @property int<1, 160000> $RouteCount
 * @property int<1, 160000> $ErrorCount
 * @property 'Kilometers'|'Miles' $DistanceUnit
 */
class CalculateRouteMatrixSummary extends Shape
{
    /**
     * @param array{
     *     DataSource: string,
     *     RouteCount: int<1, 160000>,
     *     ErrorCount: int<1, 160000>,
     *     DistanceUnit: 'Kilometers'|'Miles'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

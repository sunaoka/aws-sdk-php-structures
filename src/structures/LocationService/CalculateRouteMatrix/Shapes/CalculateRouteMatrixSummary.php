<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSource
 * @property 'Kilometers'|'Miles' $DistanceUnit
 * @property int<1, 160000> $ErrorCount
 * @property int<1, 160000> $RouteCount
 */
class CalculateRouteMatrixSummary extends Shape
{
    /**
     * @param array{
     *     DataSource: string,
     *     DistanceUnit: 'Kilometers'|'Miles',
     *     ErrorCount: int<1, 160000>,
     *     RouteCount: int<1, 160000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

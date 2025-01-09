<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSource
 * @property int $RouteCount
 * @property int $ErrorCount
 * @property 'Kilometers'|'Miles' $DistanceUnit
 */
class CalculateRouteMatrixSummary extends Shape
{
    /**
     * @param array{
     *     DataSource: string,
     *     RouteCount: int,
     *     ErrorCount: int,
     *     DistanceUnit: 'Kilometers'|'Miles'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

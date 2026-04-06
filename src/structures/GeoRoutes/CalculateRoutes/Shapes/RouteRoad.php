<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LocalizedString> $RoadName
 * @property list<RouteNumber> $RouteNumber
 * @property list<LocalizedString> $Towards
 * @property 'Highway'|'Rural'|'Urban'|null $Type
 */
class RouteRoad extends Shape
{
    /**
     * @param array{
     *     RoadName: list<LocalizedString>,
     *     RouteNumber: list<RouteNumber>,
     *     Towards: list<LocalizedString>,
     *     Type?: 'Highway'|'Rural'|'Urban'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

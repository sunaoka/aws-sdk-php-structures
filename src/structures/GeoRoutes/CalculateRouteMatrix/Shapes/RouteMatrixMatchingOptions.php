<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NameHint
 * @property int<0, max> $OnRoadThreshold
 * @property int<0, 4294967295> $Radius
 * @property 'MatchAny'|'MatchMostSignificantRoad' $Strategy
 */
class RouteMatrixMatchingOptions extends Shape
{
    /**
     * @param array{
     *     NameHint?: string,
     *     OnRoadThreshold?: int<0, max>,
     *     Radius?: int<0, 4294967295>,
     *     Strategy?: 'MatchAny'|'MatchMostSignificantRoad'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

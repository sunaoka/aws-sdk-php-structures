<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NameHint
 * @property int $OnRoadThreshold
 * @property int $Radius
 * @property 'MatchAny'|'MatchMostSignificantRoad' $Strategy
 */
class RouteMatchingOptions extends Shape
{
    /**
     * @param array{
     *     NameHint?: string,
     *     OnRoadThreshold?: int,
     *     Radius?: int,
     *     Strategy?: 'MatchAny'|'MatchMostSignificantRoad'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

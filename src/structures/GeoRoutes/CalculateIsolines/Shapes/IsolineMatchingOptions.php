<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NameHint
 * @property int<0, 4294967295>|null $OnRoadThreshold
 * @property int<0, 4294967295>|null $Radius
 * @property 'MatchAny'|'MatchMostSignificantRoad'|null $Strategy
 */
class IsolineMatchingOptions extends Shape
{
    /**
     * @param array{
     *     NameHint?: string|null,
     *     OnRoadThreshold?: int<0, 4294967295>|null,
     *     Radius?: int<0, 4294967295>|null,
     *     Strategy?: 'MatchAny'|'MatchMostSignificantRoad'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

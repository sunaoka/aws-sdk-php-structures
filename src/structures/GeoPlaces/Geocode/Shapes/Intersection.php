<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property string $Title
 * @property Address|null $Address
 * @property list<double>|null $Position
 * @property int<0, 4294967295>|null $Distance
 * @property int<0, 4294967295>|null $RouteDistance
 * @property list<double>|null $MapView
 * @property list<AccessPoint>|null $AccessPoints
 */
class Intersection extends Shape
{
    /**
     * @param array{
     *     PlaceId: string,
     *     Title: string,
     *     Address?: Address|null,
     *     Position?: list<double>|null,
     *     Distance?: int<0, 4294967295>|null,
     *     RouteDistance?: int<0, 4294967295>|null,
     *     MapView?: list<double>|null,
     *     AccessPoints?: list<AccessPoint>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Locality'|'Intersection'|'Street'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'PointOfInterest'>|null $IncludePlaceTypes
 */
class ReverseGeocodeFilter extends Shape
{
    /**
     * @param array{IncludePlaceTypes?: list<'Locality'|'Intersection'|'Street'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'PointOfInterest'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

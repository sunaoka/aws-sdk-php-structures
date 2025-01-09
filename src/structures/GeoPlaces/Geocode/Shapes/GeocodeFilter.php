<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $IncludeCountries
 * @property list<'Locality'|'PostalCode'|'Intersection'|'Street'|'PointAddress'|'InterpolatedAddress'> $IncludePlaceTypes
 */
class GeocodeFilter extends Shape
{
    /**
     * @param array{
     *     IncludeCountries?: list<string>,
     *     IncludePlaceTypes?: list<'Locality'|'PostalCode'|'Intersection'|'Street'|'PointAddress'|'InterpolatedAddress'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

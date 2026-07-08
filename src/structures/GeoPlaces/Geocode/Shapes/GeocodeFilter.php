<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $IncludeCountries
 * @property list<'Locality'|'PostalCode'|'Intersection'|'Street'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'PointOfInterest'|'Country'|'Region'>|null $IncludePlaceTypes
 */
class GeocodeFilter extends Shape
{
    /**
     * @param array{
     *     IncludeCountries?: list<string>|null,
     *     IncludePlaceTypes?: list<'Locality'|'PostalCode'|'Intersection'|'Street'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'PointOfInterest'|'Country'|'Region'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

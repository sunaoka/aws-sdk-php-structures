<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $BoundingBox
 * @property FilterCircle $Circle
 * @property list<string> $IncludeCountries
 * @property list<'Locality'|'PostalCode'> $IncludePlaceTypes
 */
class AutocompleteFilter extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>,
     *     Circle?: FilterCircle,
     *     IncludeCountries?: list<string>,
     *     IncludePlaceTypes?: list<'Locality'|'PostalCode'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

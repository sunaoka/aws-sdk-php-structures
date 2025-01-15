<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $BoundingBox
 * @property FilterCircle|null $Circle
 * @property list<string>|null $IncludeCountries
 * @property list<'Locality'|'PostalCode'>|null $IncludePlaceTypes
 */
class AutocompleteFilter extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>|null,
     *     Circle?: FilterCircle|null,
     *     IncludeCountries?: list<string>|null,
     *     IncludePlaceTypes?: list<'Locality'|'PostalCode'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $BoundingBox
 * @property FilterCircle|null $Circle
 * @property list<string>|null $IncludeCountries
 */
class SearchTextFilter extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>|null,
     *     Circle?: FilterCircle|null,
     *     IncludeCountries?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

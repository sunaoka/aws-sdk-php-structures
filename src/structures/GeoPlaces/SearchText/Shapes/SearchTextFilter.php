<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $BoundingBox
 * @property FilterCircle $Circle
 * @property list<string> $IncludeCountries
 */
class SearchTextFilter extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>,
     *     Circle?: FilterCircle,
     *     IncludeCountries?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

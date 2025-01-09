<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight> $Code
 * @property list<Highlight> $Name
 */
class RegionHighlights extends Shape
{
    /**
     * @param array{
     *     Code?: list<Highlight>,
     *     Name?: list<Highlight>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

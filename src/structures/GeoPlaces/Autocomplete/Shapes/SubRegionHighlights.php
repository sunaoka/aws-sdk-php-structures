<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight>|null $Code
 * @property list<Highlight>|null $Name
 */
class SubRegionHighlights extends Shape
{
    /**
     * @param array{
     *     Code?: list<Highlight>|null,
     *     Name?: list<Highlight>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight> $Title
 * @property AutocompleteAddressHighlights $Address
 */
class AutocompleteHighlights extends Shape
{
    /**
     * @param array{
     *     Title?: list<Highlight>,
     *     Address?: AutocompleteAddressHighlights
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

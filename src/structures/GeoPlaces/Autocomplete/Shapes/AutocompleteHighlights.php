<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight>|null $Title
 * @property AutocompleteAddressHighlights|null $Address
 */
class AutocompleteHighlights extends Shape
{
    /**
     * @param array{
     *     Title?: list<Highlight>|null,
     *     Address?: AutocompleteAddressHighlights|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

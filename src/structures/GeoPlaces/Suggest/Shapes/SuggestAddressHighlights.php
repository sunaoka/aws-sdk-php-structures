<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight> $Label
 */
class SuggestAddressHighlights extends Shape
{
    /**
     * @param array{Label?: list<Highlight>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

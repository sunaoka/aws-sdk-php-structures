<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight>|null $Label
 */
class SuggestAddressHighlights extends Shape
{
    /**
     * @param array{Label?: list<Highlight>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

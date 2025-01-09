<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight> $Title
 * @property SuggestAddressHighlights $Address
 */
class SuggestHighlights extends Shape
{
    /**
     * @param array{
     *     Title?: list<Highlight>,
     *     Address?: SuggestAddressHighlights
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

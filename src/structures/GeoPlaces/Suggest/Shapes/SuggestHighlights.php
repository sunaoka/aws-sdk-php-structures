<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight>|null $Title
 * @property SuggestAddressHighlights|null $Address
 */
class SuggestHighlights extends Shape
{
    /**
     * @param array{
     *     Title?: list<Highlight>|null,
     *     Address?: SuggestAddressHighlights|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

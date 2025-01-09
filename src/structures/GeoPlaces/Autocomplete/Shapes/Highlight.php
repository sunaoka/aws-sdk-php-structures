<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StartIndex
 * @property int $EndIndex
 * @property string $Value
 */
class Highlight extends Shape
{
    /**
     * @param array{
     *     StartIndex?: int,
     *     EndIndex?: int,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

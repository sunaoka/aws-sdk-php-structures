<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $StartIndex
 * @property int<0, max> $EndIndex
 * @property string $Value
 */
class Highlight extends Shape
{
    /**
     * @param array{
     *     StartIndex?: int<0, max>,
     *     EndIndex?: int<0, max>,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

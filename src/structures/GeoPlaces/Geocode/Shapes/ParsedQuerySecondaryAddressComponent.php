<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $StartIndex
 * @property int<0, max> $EndIndex
 * @property string $Value
 * @property string $Number
 * @property string $Designator
 */
class ParsedQuerySecondaryAddressComponent extends Shape
{
    /**
     * @param array{
     *     StartIndex: int<0, max>,
     *     EndIndex: int<0, max>,
     *     Value: string,
     *     Number: string,
     *     Designator: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

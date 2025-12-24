<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Number
 * @property string|null $Designator
 */
class SecondaryAddressComponent extends Shape
{
    /**
     * @param array{
     *     Number: string,
     *     Designator?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

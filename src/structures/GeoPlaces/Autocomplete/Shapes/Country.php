<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code2
 * @property string|null $Code3
 * @property string|null $Name
 */
class Country extends Shape
{
    /**
     * @param array{
     *     Code2?: string|null,
     *     Code3?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

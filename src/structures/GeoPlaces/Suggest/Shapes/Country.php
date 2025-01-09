<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code2
 * @property string $Code3
 * @property string $Name
 */
class Country extends Shape
{
    /**
     * @param array{
     *     Code2?: string,
     *     Code3?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 */
class BusinessChain extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

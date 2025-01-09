<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $lowerInclusive
 * @property int $upperInclusive
 */
class CisNumberFilter extends Shape
{
    /**
     * @param array{
     *     lowerInclusive?: int,
     *     upperInclusive?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

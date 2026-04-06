<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $lowerInclusive
 * @property int|null $upperInclusive
 */
class CisNumberFilter extends Shape
{
    /**
     * @param array{
     *     lowerInclusive?: int|null,
     *     upperInclusive?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

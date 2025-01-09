<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $beginInclusive
 * @property int<0, 65535> $endInclusive
 */
class PortRangeFilter extends Shape
{
    /**
     * @param array{
     *     beginInclusive?: int<0, 65535>,
     *     endInclusive?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

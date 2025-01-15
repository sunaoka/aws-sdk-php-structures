<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateFindingsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535>|null $beginInclusive
 * @property int<0, 65535>|null $endInclusive
 */
class PortRangeFilter extends Shape
{
    /**
     * @param array{
     *     beginInclusive?: int<0, 65535>|null,
     *     endInclusive?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

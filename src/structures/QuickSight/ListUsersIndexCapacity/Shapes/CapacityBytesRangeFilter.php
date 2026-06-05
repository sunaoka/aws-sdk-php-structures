<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUsersIndexCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $minBytes
 * @property int<1, max>|null $maxBytes
 */
class CapacityBytesRangeFilter extends Shape
{
    /**
     * @param array{
     *     minBytes?: int<1, max>|null,
     *     maxBytes?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

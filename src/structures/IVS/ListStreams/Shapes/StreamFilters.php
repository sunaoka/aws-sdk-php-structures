<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'STARVING'|'UNKNOWN'|null $health
 */
class StreamFilters extends Shape
{
    /**
     * @param array{health?: 'HEALTHY'|'STARVING'|'UNKNOWN'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Size
 */
class BatchArrayProperties extends Shape
{
    /**
     * @param array{Size?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

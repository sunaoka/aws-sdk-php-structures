<?php

namespace Sunaoka\Aws\Structures\DataZone\QueryGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineageNodeItem|null $lineageNode
 */
class ResultItem extends Shape
{
    /**
     * @param array{lineageNode?: LineageNodeItem|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneTagFilter $TagFilter
 */
class QueueSearchFilter extends Shape
{
    /**
     * @param array{TagFilter?: ControlPlaneTagFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

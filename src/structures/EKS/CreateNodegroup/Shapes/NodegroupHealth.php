<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Issue>|null $issues
 */
class NodegroupHealth extends Shape
{
    /**
     * @param array{issues?: list<Issue>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

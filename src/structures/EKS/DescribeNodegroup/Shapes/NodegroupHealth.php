<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Issue> $issues
 */
class NodegroupHealth extends Shape
{
    /**
     * @param array{issues?: list<Issue>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Preview|null $Preview
 */
class AgentFirst extends Shape
{
    /**
     * @param array{Preview?: Preview|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

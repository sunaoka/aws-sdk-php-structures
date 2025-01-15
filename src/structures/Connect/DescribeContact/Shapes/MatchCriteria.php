<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentsCriteria|null $AgentsCriteria
 */
class MatchCriteria extends Shape
{
    /**
     * @param array{AgentsCriteria?: AgentsCriteria|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

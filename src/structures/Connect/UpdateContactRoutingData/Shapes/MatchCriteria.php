<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentsCriteria $AgentsCriteria
 */
class MatchCriteria extends Shape
{
    /**
     * @param array{AgentsCriteria?: AgentsCriteria} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

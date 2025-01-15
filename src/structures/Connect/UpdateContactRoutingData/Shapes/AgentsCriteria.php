<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AgentIds
 */
class AgentsCriteria extends Shape
{
    /**
     * @param array{AgentIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

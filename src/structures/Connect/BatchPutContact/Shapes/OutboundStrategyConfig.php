<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentFirst|null $AgentFirst
 */
class OutboundStrategyConfig extends Shape
{
    /**
     * @param array{AgentFirst?: AgentFirst|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

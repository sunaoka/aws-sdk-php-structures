<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HAS_EVENTS'|null $eventFilter
 */
class SessionFilter extends Shape
{
    /**
     * @param array{eventFilter?: 'HAS_EVENTS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

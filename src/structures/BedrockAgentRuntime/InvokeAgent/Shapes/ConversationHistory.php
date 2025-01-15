<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message>|null $messages
 */
class ConversationHistory extends Shape
{
    /**
     * @param array{messages?: list<Message>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

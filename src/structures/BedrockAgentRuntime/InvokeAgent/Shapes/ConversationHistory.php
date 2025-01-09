<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message> $messages
 */
class ConversationHistory extends Shape
{
    /**
     * @param array{messages?: list<Message>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveMessageContent $content
 * @property 'user'|'assistant' $role
 */
class AgenticRetrieveMessage extends Shape
{
    /**
     * @param array{
     *     content: AgenticRetrieveMessageContent,
     *     role: 'user'|'assistant'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

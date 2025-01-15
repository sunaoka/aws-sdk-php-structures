<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'PARSER'|null $source
 * @property string|null $text
 */
class RepromptResponse extends Shape
{
    /**
     * @param array{
     *     source?: 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'PARSER'|null,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

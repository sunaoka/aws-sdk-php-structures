<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'PARSER' $source
 * @property string $text
 */
class RepromptResponse extends Shape
{
    /**
     * @param array{
     *     source?: 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'PARSER',
     *     text?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

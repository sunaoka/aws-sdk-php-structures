<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'PARSER'|null $source
 */
class RepromptResponse extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     source?: 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'PARSER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

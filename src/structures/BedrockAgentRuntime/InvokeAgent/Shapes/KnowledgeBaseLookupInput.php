<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $knowledgeBaseId
 * @property string|null $text
 */
class KnowledgeBaseLookupInput extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId?: string|null,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

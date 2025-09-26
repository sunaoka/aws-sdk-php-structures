<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property string|null $knowledgeBaseId
 */
class KnowledgeBaseLookupInput extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     knowledgeBaseId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

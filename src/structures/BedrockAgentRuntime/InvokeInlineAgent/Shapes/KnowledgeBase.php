<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $description
 * @property KnowledgeBaseRetrievalConfiguration|null $retrievalConfiguration
 */
class KnowledgeBase extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     description: string,
     *     retrievalConfiguration?: KnowledgeBaseRetrievalConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

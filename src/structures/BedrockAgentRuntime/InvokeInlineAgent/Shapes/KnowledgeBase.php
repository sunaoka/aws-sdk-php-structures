<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $knowledgeBaseId
 * @property KnowledgeBaseRetrievalConfiguration|null $retrievalConfiguration
 */
class KnowledgeBase extends Shape
{
    /**
     * @param array{
     *     description: string,
     *     knowledgeBaseId: string,
     *     retrievalConfiguration?: KnowledgeBaseRetrievalConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

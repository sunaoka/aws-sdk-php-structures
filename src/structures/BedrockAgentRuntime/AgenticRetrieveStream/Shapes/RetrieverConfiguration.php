<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBaseRetrieverConfiguration|null $knowledgeBase
 */
class RetrieverConfiguration extends Shape
{
    /**
     * @param array{knowledgeBase?: KnowledgeBaseRetrieverConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

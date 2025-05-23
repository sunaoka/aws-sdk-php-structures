<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBaseVectorSearchConfiguration $vectorSearchConfiguration
 */
class KnowledgeBaseRetrievalConfiguration extends Shape
{
    /**
     * @param array{vectorSearchConfiguration: KnowledgeBaseVectorSearchConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

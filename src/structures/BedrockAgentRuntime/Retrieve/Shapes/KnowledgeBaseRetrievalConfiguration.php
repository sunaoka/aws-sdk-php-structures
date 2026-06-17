<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedSearchConfiguration|null $managedSearchConfiguration
 * @property KnowledgeBaseVectorSearchConfiguration|null $vectorSearchConfiguration
 */
class KnowledgeBaseRetrievalConfiguration extends Shape
{
    /**
     * @param array{
     *     managedSearchConfiguration?: ManagedSearchConfiguration|null,
     *     vectorSearchConfiguration?: KnowledgeBaseVectorSearchConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property RetrievalOverrides|null $retrievalOverrides
 */
class KnowledgeBaseRetrieverConfiguration extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     retrievalOverrides?: RetrievalOverrides|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

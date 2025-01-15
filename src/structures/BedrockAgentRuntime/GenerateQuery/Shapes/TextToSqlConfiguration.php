<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextToSqlKnowledgeBaseConfiguration|null $knowledgeBaseConfiguration
 * @property 'KNOWLEDGE_BASE' $type
 */
class TextToSqlConfiguration extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseConfiguration?: TextToSqlKnowledgeBaseConfiguration|null,
     *     type: 'KNOWLEDGE_BASE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KNOWLEDGE_BASE' $type
 * @property TextToSqlKnowledgeBaseConfiguration|null $knowledgeBaseConfiguration
 */
class TextToSqlConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'KNOWLEDGE_BASE',
     *     knowledgeBaseConfiguration?: TextToSqlKnowledgeBaseConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

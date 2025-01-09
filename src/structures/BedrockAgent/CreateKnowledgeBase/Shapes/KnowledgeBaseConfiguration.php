<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KendraKnowledgeBaseConfiguration $kendraKnowledgeBaseConfiguration
 * @property SqlKnowledgeBaseConfiguration $sqlKnowledgeBaseConfiguration
 * @property 'VECTOR'|'KENDRA'|'SQL' $type
 * @property VectorKnowledgeBaseConfiguration $vectorKnowledgeBaseConfiguration
 */
class KnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     kendraKnowledgeBaseConfiguration?: KendraKnowledgeBaseConfiguration,
     *     sqlKnowledgeBaseConfiguration?: SqlKnowledgeBaseConfiguration,
     *     type: 'VECTOR'|'KENDRA'|'SQL',
     *     vectorKnowledgeBaseConfiguration?: VectorKnowledgeBaseConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

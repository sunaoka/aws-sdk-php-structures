<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KendraKnowledgeBaseConfiguration|null $kendraKnowledgeBaseConfiguration
 * @property SqlKnowledgeBaseConfiguration|null $sqlKnowledgeBaseConfiguration
 * @property 'VECTOR'|'KENDRA'|'SQL' $type
 * @property VectorKnowledgeBaseConfiguration|null $vectorKnowledgeBaseConfiguration
 */
class KnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     kendraKnowledgeBaseConfiguration?: KendraKnowledgeBaseConfiguration|null,
     *     sqlKnowledgeBaseConfiguration?: SqlKnowledgeBaseConfiguration|null,
     *     type: 'VECTOR'|'KENDRA'|'SQL',
     *     vectorKnowledgeBaseConfiguration?: VectorKnowledgeBaseConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

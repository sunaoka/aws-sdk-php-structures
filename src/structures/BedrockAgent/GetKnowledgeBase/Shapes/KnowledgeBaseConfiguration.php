<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VECTOR'|'KENDRA'|'SQL' $type
 * @property VectorKnowledgeBaseConfiguration|null $vectorKnowledgeBaseConfiguration
 * @property KendraKnowledgeBaseConfiguration|null $kendraKnowledgeBaseConfiguration
 * @property SqlKnowledgeBaseConfiguration|null $sqlKnowledgeBaseConfiguration
 */
class KnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'VECTOR'|'KENDRA'|'SQL',
     *     vectorKnowledgeBaseConfiguration?: VectorKnowledgeBaseConfiguration|null,
     *     kendraKnowledgeBaseConfiguration?: KendraKnowledgeBaseConfiguration|null,
     *     sqlKnowledgeBaseConfiguration?: SqlKnowledgeBaseConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

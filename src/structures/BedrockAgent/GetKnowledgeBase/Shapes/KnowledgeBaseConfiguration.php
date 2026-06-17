<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VECTOR'|'KENDRA'|'SQL'|'MANAGED' $type
 * @property VectorKnowledgeBaseConfiguration|null $vectorKnowledgeBaseConfiguration
 * @property ManagedKnowledgeBaseConfiguration|null $managedKnowledgeBaseConfiguration
 * @property KendraKnowledgeBaseConfiguration|null $kendraKnowledgeBaseConfiguration
 * @property SqlKnowledgeBaseConfiguration|null $sqlKnowledgeBaseConfiguration
 */
class KnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'VECTOR'|'KENDRA'|'SQL'|'MANAGED',
     *     vectorKnowledgeBaseConfiguration?: VectorKnowledgeBaseConfiguration|null,
     *     managedKnowledgeBaseConfiguration?: ManagedKnowledgeBaseConfiguration|null,
     *     kendraKnowledgeBaseConfiguration?: KendraKnowledgeBaseConfiguration|null,
     *     sqlKnowledgeBaseConfiguration?: SqlKnowledgeBaseConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

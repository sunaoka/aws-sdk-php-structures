<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VECTOR' $type
 * @property VectorKnowledgeBaseConfiguration|null $vectorKnowledgeBaseConfiguration
 */
class KnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'VECTOR',
     *     vectorKnowledgeBaseConfiguration?: VectorKnowledgeBaseConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

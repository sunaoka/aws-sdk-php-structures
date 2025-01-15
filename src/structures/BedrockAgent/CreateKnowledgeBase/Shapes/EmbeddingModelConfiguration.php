<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockEmbeddingModelConfiguration|null $bedrockEmbeddingModelConfiguration
 */
class EmbeddingModelConfiguration extends Shape
{
    /**
     * @param array{bedrockEmbeddingModelConfiguration?: BedrockEmbeddingModelConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

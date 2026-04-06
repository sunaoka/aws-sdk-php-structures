<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4096>|null $dimensions
 * @property 'FLOAT32'|'BINARY'|null $embeddingDataType
 */
class BedrockEmbeddingModelConfiguration extends Shape
{
    /**
     * @param array{
     *     dimensions?: int<0, 4096>|null,
     *     embeddingDataType?: 'FLOAT32'|'BINARY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

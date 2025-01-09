<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4096> $dimensions
 * @property 'FLOAT32'|'BINARY' $embeddingDataType
 */
class BedrockEmbeddingModelConfiguration extends Shape
{
    /**
     * @param array{
     *     dimensions?: int<0, 4096>,
     *     embeddingDataType?: 'FLOAT32'|'BINARY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

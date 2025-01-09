<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $dimensions
 * @property 'FLOAT32'|'BINARY' $embeddingDataType
 */
class BedrockEmbeddingModelConfiguration extends Shape
{
    /**
     * @param array{
     *     dimensions?: int,
     *     embeddingDataType?: 'FLOAT32'|'BINARY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

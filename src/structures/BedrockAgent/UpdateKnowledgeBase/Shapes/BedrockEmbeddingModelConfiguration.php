<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4096>|null $dimensions
 * @property 'FLOAT32'|'BINARY'|null $embeddingDataType
 * @property list<AudioConfiguration>|null $audio
 * @property list<VideoConfiguration>|null $video
 */
class BedrockEmbeddingModelConfiguration extends Shape
{
    /**
     * @param array{
     *     dimensions?: int<0, 4096>|null,
     *     embeddingDataType?: 'FLOAT32'|'BINARY'|null,
     *     audio?: list<AudioConfiguration>|null,
     *     video?: list<VideoConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

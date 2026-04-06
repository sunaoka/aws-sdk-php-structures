<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioSegmentationConfiguration $segmentationConfiguration
 */
class AudioConfiguration extends Shape
{
    /**
     * @param array{segmentationConfiguration: AudioSegmentationConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

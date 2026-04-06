<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoSegmentationConfiguration $segmentationConfiguration
 */
class VideoConfiguration extends Shape
{
    /**
     * @param array{segmentationConfiguration: VideoSegmentationConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

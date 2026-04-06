<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoExtractionCategory $category
 * @property VideoBoundingBox $boundingBox
 */
class VideoStandardExtraction extends Shape
{
    /**
     * @param array{
     *     category: VideoExtractionCategory,
     *     boundingBox: VideoBoundingBox
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

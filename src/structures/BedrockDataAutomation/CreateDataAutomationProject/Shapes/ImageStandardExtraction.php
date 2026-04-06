<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageExtractionCategory $category
 * @property ImageBoundingBox $boundingBox
 */
class ImageStandardExtraction extends Shape
{
    /**
     * @param array{
     *     category: ImageExtractionCategory,
     *     boundingBox: ImageBoundingBox
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

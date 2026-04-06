<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioExtractionCategory $category
 */
class AudioStandardExtraction extends Shape
{
    /**
     * @param array{category: AudioExtractionCategory} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

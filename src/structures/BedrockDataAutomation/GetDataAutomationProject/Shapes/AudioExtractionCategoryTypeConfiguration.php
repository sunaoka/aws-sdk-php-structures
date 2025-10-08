<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TranscriptConfiguration|null $transcript
 */
class AudioExtractionCategoryTypeConfiguration extends Shape
{
    /**
     * @param array{transcript?: TranscriptConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

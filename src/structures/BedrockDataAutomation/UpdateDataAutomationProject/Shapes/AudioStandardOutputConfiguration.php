<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioStandardExtraction $extraction
 * @property AudioStandardGenerativeField $generativeField
 */
class AudioStandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     extraction?: AudioStandardExtraction,
     *     generativeField?: AudioStandardGenerativeField
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

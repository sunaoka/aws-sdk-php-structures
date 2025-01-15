<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioStandardExtraction|null $extraction
 * @property AudioStandardGenerativeField|null $generativeField
 */
class AudioStandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     extraction?: AudioStandardExtraction|null,
     *     generativeField?: AudioStandardGenerativeField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

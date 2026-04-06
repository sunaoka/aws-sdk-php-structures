<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoStandardExtraction|null $extraction
 * @property VideoStandardGenerativeField|null $generativeField
 */
class VideoStandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     extraction?: VideoStandardExtraction|null,
     *     generativeField?: VideoStandardGenerativeField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoStandardExtraction $extraction
 * @property VideoStandardGenerativeField $generativeField
 */
class VideoStandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     extraction?: VideoStandardExtraction,
     *     generativeField?: VideoStandardGenerativeField
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

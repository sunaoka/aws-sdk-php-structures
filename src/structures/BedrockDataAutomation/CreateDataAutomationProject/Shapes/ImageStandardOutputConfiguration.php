<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageStandardExtraction $extraction
 * @property ImageStandardGenerativeField $generativeField
 */
class ImageStandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     extraction?: ImageStandardExtraction,
     *     generativeField?: ImageStandardGenerativeField
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

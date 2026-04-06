<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageStandardExtraction|null $extraction
 * @property ImageStandardGenerativeField|null $generativeField
 */
class ImageStandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     extraction?: ImageStandardExtraction|null,
     *     generativeField?: ImageStandardGenerativeField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

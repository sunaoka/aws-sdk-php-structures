<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentStandardExtraction|null $extraction
 * @property DocumentStandardGenerativeField|null $generativeField
 * @property DocumentOutputFormat|null $outputFormat
 */
class DocumentStandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     extraction?: DocumentStandardExtraction|null,
     *     generativeField?: DocumentStandardGenerativeField|null,
     *     outputFormat?: DocumentOutputFormat|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

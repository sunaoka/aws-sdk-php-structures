<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentStandardExtraction $extraction
 * @property DocumentStandardGenerativeField $generativeField
 * @property DocumentOutputFormat $outputFormat
 */
class DocumentStandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     extraction?: DocumentStandardExtraction,
     *     generativeField?: DocumentStandardGenerativeField,
     *     outputFormat?: DocumentOutputFormat
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

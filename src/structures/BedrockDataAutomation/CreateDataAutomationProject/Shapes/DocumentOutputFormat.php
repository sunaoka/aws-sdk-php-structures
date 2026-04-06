<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentOutputTextFormat $textFormat
 * @property DocumentOutputAdditionalFileFormat $additionalFileFormat
 */
class DocumentOutputFormat extends Shape
{
    /**
     * @param array{
     *     textFormat: DocumentOutputTextFormat,
     *     additionalFileFormat: DocumentOutputAdditionalFileFormat
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

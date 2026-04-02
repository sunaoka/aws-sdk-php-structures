<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object|null $s3Object
 * @property InlinePayload|null $inlinePayload
 */
class InputConfiguration extends Shape
{
    /**
     * @param array{
     *     s3Object?: S3Object|null,
     *     inlinePayload?: InlinePayload|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

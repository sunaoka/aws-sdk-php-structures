<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property string|null $displayAsText
 */
class Phrase extends Shape
{
    /**
     * @param array{
     *     text: string,
     *     displayAsText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

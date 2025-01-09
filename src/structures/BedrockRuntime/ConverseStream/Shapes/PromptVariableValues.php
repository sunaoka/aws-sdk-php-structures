<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 */
class PromptVariableValues extends Shape
{
    /**
     * @param array{text?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

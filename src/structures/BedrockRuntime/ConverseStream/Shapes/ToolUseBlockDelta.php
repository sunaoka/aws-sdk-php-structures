<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $input
 */
class ToolUseBlockDelta extends Shape
{
    /**
     * @param array{input: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

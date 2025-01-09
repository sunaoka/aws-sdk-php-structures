<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolUseBlockStart $toolUse
 */
class ContentBlockStart extends Shape
{
    /**
     * @param array{toolUse?: ToolUseBlockStart} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property ToolUseBlockDelta $toolUse
 */
class ContentBlockDelta extends Shape
{
    /**
     * @param array{
     *     text?: string,
     *     toolUse?: ToolUseBlockDelta
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

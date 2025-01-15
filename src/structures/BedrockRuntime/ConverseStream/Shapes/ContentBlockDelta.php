<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property ToolUseBlockDelta|null $toolUse
 */
class ContentBlockDelta extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     toolUse?: ToolUseBlockDelta|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

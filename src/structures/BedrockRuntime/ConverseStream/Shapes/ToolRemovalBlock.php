<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolReference $tool
 */
class ToolRemovalBlock extends Shape
{
    /**
     * @param array{tool: ToolReference} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Tool> $tools
 * @property ToolChoice $toolChoice
 */
class ToolConfiguration extends Shape
{
    /**
     * @param array{
     *     tools: list<Tool>,
     *     toolChoice?: ToolChoice
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

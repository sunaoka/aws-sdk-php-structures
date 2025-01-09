<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolChoice $toolChoice
 * @property list<Tool> $tools
 */
class ToolConfiguration extends Shape
{
    /**
     * @param array{
     *     toolChoice?: ToolChoice,
     *     tools: list<Tool>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

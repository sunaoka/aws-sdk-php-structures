<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolChoice|null $toolChoice
 * @property list<Tool> $tools
 */
class ToolConfiguration extends Shape
{
    /**
     * @param array{
     *     toolChoice?: ToolChoice|null,
     *     tools: list<Tool>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

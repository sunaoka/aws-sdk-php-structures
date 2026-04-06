<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Tool> $tools
 * @property ToolChoice|null $toolChoice
 */
class ToolConfiguration extends Shape
{
    /**
     * @param array{
     *     tools: list<Tool>,
     *     toolChoice?: ToolChoice|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

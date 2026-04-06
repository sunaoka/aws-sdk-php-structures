<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolOverrideConstantInputValue|null $constant
 */
class ToolOverrideInputValueConfiguration extends Shape
{
    /**
     * @param array{constant?: ToolOverrideConstantInputValue|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

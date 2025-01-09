<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolSpecification $toolSpec
 */
class Tool extends Shape
{
    /**
     * @param array{toolSpec?: ToolSpecification} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

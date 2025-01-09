<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class PromptInputVariable extends Shape
{
    /**
     * @param array{name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

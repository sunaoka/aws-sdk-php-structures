<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FunctionShape> $functions
 */
class FunctionSchema extends Shape
{
    /**
     * @param array{functions?: list<FunctionShape>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

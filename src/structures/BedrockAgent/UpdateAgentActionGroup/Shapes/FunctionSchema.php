<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FunctionShape>|null $functions
 */
class FunctionSchema extends Shape
{
    /**
     * @param array{functions?: list<FunctionShape>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

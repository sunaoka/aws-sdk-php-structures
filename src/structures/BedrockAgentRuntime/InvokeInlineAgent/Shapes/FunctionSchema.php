<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FunctionDefinition> $functions
 */
class FunctionSchema extends Shape
{
    /**
     * @param array{functions?: list<FunctionDefinition>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

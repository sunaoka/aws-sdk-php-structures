<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FunctionDefinition>|null $functions
 */
class FunctionSchema extends Shape
{
    /**
     * @param array{functions?: list<FunctionDefinition>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

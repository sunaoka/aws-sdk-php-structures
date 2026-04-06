<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property string|null $function
 * @property list<FunctionParameter>|null $parameters
 */
class FunctionInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     function?: string|null,
     *     parameters?: list<FunctionParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

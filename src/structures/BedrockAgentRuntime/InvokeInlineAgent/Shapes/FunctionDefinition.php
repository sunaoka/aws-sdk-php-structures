<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $name
 * @property array<string, ParameterDetail> $parameters
 * @property 'ENABLED'|'DISABLED' $requireConfirmation
 */
class FunctionDefinition extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     name: string,
     *     parameters?: array<string, ParameterDetail>,
     *     requireConfirmation?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

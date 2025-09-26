<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property list<FunctionParameter>|null $parameters
 * @property string|null $function
 * @property 'RESULT'|'USER_CONFIRMATION'|'USER_CONFIRMATION_AND_RESULT'|null $actionInvocationType
 * @property string|null $agentId
 * @property string|null $collaboratorName
 */
class FunctionInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     parameters?: list<FunctionParameter>|null,
     *     function?: string|null,
     *     actionInvocationType?: 'RESULT'|'USER_CONFIRMATION'|'USER_CONFIRMATION_AND_RESULT'|null,
     *     agentId?: string|null,
     *     collaboratorName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

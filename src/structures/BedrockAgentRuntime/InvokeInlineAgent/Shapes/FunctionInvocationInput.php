<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property 'RESULT'|'USER_CONFIRMATION'|'USER_CONFIRMATION_AND_RESULT'|null $actionInvocationType
 * @property string|null $agentId
 * @property string|null $collaboratorName
 * @property string|null $function
 * @property list<FunctionParameter>|null $parameters
 */
class FunctionInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     actionInvocationType?: 'RESULT'|'USER_CONFIRMATION'|'USER_CONFIRMATION_AND_RESULT'|null,
     *     agentId?: string|null,
     *     collaboratorName?: string|null,
     *     function?: string|null,
     *     parameters?: list<FunctionParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

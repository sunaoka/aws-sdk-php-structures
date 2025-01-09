<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property 'RESULT'|'USER_CONFIRMATION'|'USER_CONFIRMATION_AND_RESULT' $actionInvocationType
 * @property string $agentId
 * @property string $collaboratorName
 * @property string $function
 * @property list<FunctionParameter> $parameters
 */
class FunctionInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     actionInvocationType?: 'RESULT'|'USER_CONFIRMATION'|'USER_CONFIRMATION_AND_RESULT',
     *     agentId?: string,
     *     collaboratorName?: string,
     *     function?: string,
     *     parameters?: list<FunctionParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

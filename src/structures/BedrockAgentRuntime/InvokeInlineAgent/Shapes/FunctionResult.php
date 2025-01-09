<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property string $agentId
 * @property 'CONFIRM'|'DENY' $confirmationState
 * @property string $function
 * @property array<string, ContentBody> $responseBody
 * @property 'FAILURE'|'REPROMPT' $responseState
 */
class FunctionResult extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     agentId?: string,
     *     confirmationState?: 'CONFIRM'|'DENY',
     *     function?: string,
     *     responseBody?: array<string, ContentBody>,
     *     responseState?: 'FAILURE'|'REPROMPT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property 'CONFIRM'|'DENY'|null $confirmationState
 * @property string|null $function
 * @property array<string, ContentBody>|null $responseBody
 * @property 'FAILURE'|'REPROMPT'|null $responseState
 * @property string|null $agentId
 */
class FunctionResult extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     confirmationState?: 'CONFIRM'|'DENY'|null,
     *     function?: string|null,
     *     responseBody?: array<string, ContentBody>|null,
     *     responseState?: 'FAILURE'|'REPROMPT'|null,
     *     agentId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

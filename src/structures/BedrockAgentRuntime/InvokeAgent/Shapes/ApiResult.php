<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property string $agentId
 * @property string $apiPath
 * @property 'CONFIRM'|'DENY' $confirmationState
 * @property string $httpMethod
 * @property int $httpStatusCode
 * @property array<string, ContentBody> $responseBody
 * @property 'FAILURE'|'REPROMPT' $responseState
 */
class ApiResult extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     agentId?: string,
     *     apiPath?: string,
     *     confirmationState?: 'CONFIRM'|'DENY',
     *     httpMethod?: string,
     *     httpStatusCode?: int,
     *     responseBody?: array<string, ContentBody>,
     *     responseState?: 'FAILURE'|'REPROMPT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

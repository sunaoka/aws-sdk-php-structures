<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property string|null $httpMethod
 * @property string|null $apiPath
 * @property 'CONFIRM'|'DENY'|null $confirmationState
 * @property 'FAILURE'|'REPROMPT'|null $responseState
 * @property int|null $httpStatusCode
 * @property array<string, ContentBody>|null $responseBody
 * @property string|null $agentId
 */
class ApiResult extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     httpMethod?: string|null,
     *     apiPath?: string|null,
     *     confirmationState?: 'CONFIRM'|'DENY'|null,
     *     responseState?: 'FAILURE'|'REPROMPT'|null,
     *     httpStatusCode?: int|null,
     *     responseBody?: array<string, ContentBody>|null,
     *     agentId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

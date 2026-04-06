<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property string|null $agentId
 * @property string|null $apiPath
 * @property 'CONFIRM'|'DENY'|null $confirmationState
 * @property string|null $httpMethod
 * @property int|null $httpStatusCode
 * @property array<string, ContentBody>|null $responseBody
 * @property 'FAILURE'|'REPROMPT'|null $responseState
 */
class ApiResult extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     agentId?: string|null,
     *     apiPath?: string|null,
     *     confirmationState?: 'CONFIRM'|'DENY'|null,
     *     httpMethod?: string|null,
     *     httpStatusCode?: int|null,
     *     responseBody?: array<string, ContentBody>|null,
     *     responseState?: 'FAILURE'|'REPROMPT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

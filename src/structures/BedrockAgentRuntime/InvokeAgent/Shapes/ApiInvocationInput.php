<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property 'RESULT'|'USER_CONFIRMATION'|'USER_CONFIRMATION_AND_RESULT' $actionInvocationType
 * @property string $agentId
 * @property string $apiPath
 * @property string $collaboratorName
 * @property string $httpMethod
 * @property list<ApiParameter> $parameters
 * @property ApiRequestBody $requestBody
 */
class ApiInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     actionInvocationType?: 'RESULT'|'USER_CONFIRMATION'|'USER_CONFIRMATION_AND_RESULT',
     *     agentId?: string,
     *     apiPath?: string,
     *     collaboratorName?: string,
     *     httpMethod?: string,
     *     parameters?: list<ApiParameter>,
     *     requestBody?: ApiRequestBody
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property string|null $httpMethod
 * @property string|null $apiPath
 * @property list<ApiParameter>|null $parameters
 * @property ApiRequestBody|null $requestBody
 * @property 'RESULT'|'USER_CONFIRMATION'|'USER_CONFIRMATION_AND_RESULT'|null $actionInvocationType
 * @property string|null $agentId
 * @property string|null $collaboratorName
 */
class ApiInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     httpMethod?: string|null,
     *     apiPath?: string|null,
     *     parameters?: list<ApiParameter>|null,
     *     requestBody?: ApiRequestBody|null,
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

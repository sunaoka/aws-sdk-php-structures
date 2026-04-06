<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property string|null $apiPath
 * @property string|null $httpMethod
 * @property list<ApiParameter>|null $parameters
 * @property ApiRequestBody|null $requestBody
 */
class ApiInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     apiPath?: string|null,
     *     httpMethod?: string|null,
     *     parameters?: list<ApiParameter>|null,
     *     requestBody?: ApiRequestBody|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $httpMethod
 * @property string|null $authorizationType
 * @property string|null $authorizerId
 * @property bool|null $apiKeyRequired
 * @property string|null $requestValidatorId
 * @property string|null $operationName
 * @property array<string, bool>|null $requestParameters
 * @property array<string, string>|null $requestModels
 * @property array<string, MethodResponse>|null $methodResponses
 * @property Integration|null $methodIntegration
 * @property list<string>|null $authorizationScopes
 */
class Method extends Shape
{
    /**
     * @param array{
     *     httpMethod?: string|null,
     *     authorizationType?: string|null,
     *     authorizerId?: string|null,
     *     apiKeyRequired?: bool|null,
     *     requestValidatorId?: string|null,
     *     operationName?: string|null,
     *     requestParameters?: array<string, bool>|null,
     *     requestModels?: array<string, string>|null,
     *     methodResponses?: array<string, MethodResponse>|null,
     *     methodIntegration?: Integration|null,
     *     authorizationScopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

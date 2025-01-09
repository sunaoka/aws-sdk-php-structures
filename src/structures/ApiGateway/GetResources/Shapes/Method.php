<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $httpMethod
 * @property string $authorizationType
 * @property string $authorizerId
 * @property bool $apiKeyRequired
 * @property string $requestValidatorId
 * @property string $operationName
 * @property array<string, bool> $requestParameters
 * @property array<string, string> $requestModels
 * @property array<string, MethodResponse> $methodResponses
 * @property Integration $methodIntegration
 * @property list<string> $authorizationScopes
 */
class Method extends Shape
{
    /**
     * @param array{
     *     httpMethod?: string,
     *     authorizationType?: string,
     *     authorizerId?: string,
     *     apiKeyRequired?: bool,
     *     requestValidatorId?: string,
     *     operationName?: string,
     *     requestParameters?: array<string, bool>,
     *     requestModels?: array<string, string>,
     *     methodResponses?: array<string, MethodResponse>,
     *     methodIntegration?: Integration,
     *     authorizationScopes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetMethod;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $httpMethod
 * @property string $authorizationType
 * @property string $authorizerId
 * @property bool $apiKeyRequired
 * @property string $requestValidatorId
 * @property string $operationName
 * @property array<string, bool> $requestParameters
 * @property array<string, string> $requestModels
 * @property array<string, Shapes\MethodResponse> $methodResponses
 * @property Shapes\Integration $methodIntegration
 * @property list<string> $authorizationScopes
 */
class GetMethodResponse extends Response
{
}

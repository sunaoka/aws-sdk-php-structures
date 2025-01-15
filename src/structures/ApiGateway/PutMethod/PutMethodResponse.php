<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutMethod;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $httpMethod
 * @property string|null $authorizationType
 * @property string|null $authorizerId
 * @property bool|null $apiKeyRequired
 * @property string|null $requestValidatorId
 * @property string|null $operationName
 * @property array<string, bool>|null $requestParameters
 * @property array<string, string>|null $requestModels
 * @property array<string, Shapes\MethodResponse>|null $methodResponses
 * @property Shapes\Integration|null $methodIntegration
 * @property list<string>|null $authorizationScopes
 */
class PutMethodResponse extends Response
{
}

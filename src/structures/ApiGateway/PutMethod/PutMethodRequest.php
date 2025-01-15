<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property string $authorizationType
 * @property string|null $authorizerId
 * @property bool|null $apiKeyRequired
 * @property string|null $operationName
 * @property array<string, bool>|null $requestParameters
 * @property array<string, string>|null $requestModels
 * @property string|null $requestValidatorId
 * @property list<string>|null $authorizationScopes
 */
class PutMethodRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     authorizationType: string,
     *     authorizerId?: string|null,
     *     apiKeyRequired?: bool|null,
     *     operationName?: string|null,
     *     requestParameters?: array<string, bool>|null,
     *     requestModels?: array<string, string>|null,
     *     requestValidatorId?: string|null,
     *     authorizationScopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

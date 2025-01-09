<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property string $authorizationType
 * @property string $authorizerId
 * @property bool $apiKeyRequired
 * @property string $operationName
 * @property array<string, bool> $requestParameters
 * @property array<string, string> $requestModels
 * @property string $requestValidatorId
 * @property list<string> $authorizationScopes
 */
class PutMethodRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     authorizationType: string,
     *     authorizerId?: string,
     *     apiKeyRequired?: bool,
     *     operationName?: string,
     *     requestParameters?: array<string, bool>,
     *     requestModels?: array<string, string>,
     *     requestValidatorId?: string,
     *     authorizationScopes?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutMethodResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property string $statusCode
 * @property array<string, bool> $responseParameters
 * @property array<string, string> $responseModels
 */
class PutMethodResponseRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     statusCode: string,
     *     responseParameters?: array<string, bool>,
     *     responseModels?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

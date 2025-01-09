<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetMethodResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property string $statusCode
 */
class GetMethodResponseRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     statusCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 */
class DeleteMethodRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

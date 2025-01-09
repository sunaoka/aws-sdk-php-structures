<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 */
class DeleteIntegrationRequest extends Request
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

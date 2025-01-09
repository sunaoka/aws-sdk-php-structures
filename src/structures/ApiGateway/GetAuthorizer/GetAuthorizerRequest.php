<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $authorizerId
 */
class GetAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     authorizerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

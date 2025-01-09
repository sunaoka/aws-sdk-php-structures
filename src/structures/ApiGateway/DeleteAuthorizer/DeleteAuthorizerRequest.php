<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $authorizerId
 */
class DeleteAuthorizerRequest extends Request
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

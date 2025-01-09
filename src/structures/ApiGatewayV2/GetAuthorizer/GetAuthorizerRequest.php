<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $AuthorizerId
 */
class GetAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     AuthorizerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

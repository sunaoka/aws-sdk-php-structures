<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ResetAuthorizersCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $StageName
 */
class ResetAuthorizersCacheRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

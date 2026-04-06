<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessTokenId
 */
class GetAccessTokenRequest extends Request
{
    /**
     * @param array{accessTokenId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

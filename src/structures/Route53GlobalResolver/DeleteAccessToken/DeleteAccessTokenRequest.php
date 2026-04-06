<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessTokenId
 */
class DeleteAccessTokenRequest extends Request
{
    /**
     * @param array{accessTokenId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

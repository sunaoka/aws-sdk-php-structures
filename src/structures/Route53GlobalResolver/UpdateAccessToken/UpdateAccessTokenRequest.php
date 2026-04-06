<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessTokenId
 * @property string $name
 */
class UpdateAccessTokenRequest extends Request
{
    /**
     * @param array{
     *     accessTokenId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

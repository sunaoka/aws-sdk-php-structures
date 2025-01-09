<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\RevokeToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Token
 * @property string $ClientId
 * @property string $ClientSecret
 */
class RevokeTokenRequest extends Request
{
    /**
     * @param array{
     *     Token: string,
     *     ClientId: string,
     *     ClientSecret?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

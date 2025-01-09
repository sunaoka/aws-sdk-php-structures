<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ChangePassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PreviousPassword
 * @property string $ProposedPassword
 * @property string $AccessToken
 */
class ChangePasswordRequest extends Request
{
    /**
     * @param array{
     *     PreviousPassword?: string,
     *     ProposedPassword: string,
     *     AccessToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

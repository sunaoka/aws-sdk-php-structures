<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ChangePassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PreviousPassword
 * @property string $ProposedPassword
 * @property string $AccessToken
 */
class ChangePasswordRequest extends Request
{
    /**
     * @param array{
     *     PreviousPassword?: string|null,
     *     ProposedPassword: string,
     *     AccessToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

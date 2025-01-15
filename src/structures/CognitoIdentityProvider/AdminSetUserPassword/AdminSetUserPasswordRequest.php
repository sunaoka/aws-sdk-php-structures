<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property string $Password
 * @property bool|null $Permanent
 */
class AdminSetUserPasswordRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     Password: string,
     *     Permanent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

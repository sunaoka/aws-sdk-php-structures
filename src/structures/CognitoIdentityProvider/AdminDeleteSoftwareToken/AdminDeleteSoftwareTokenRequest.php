<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDeleteSoftwareToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 */
class AdminDeleteSoftwareTokenRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

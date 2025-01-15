<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminResetUserPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property array<string, string>|null $ClientMetadata
 */
class AdminResetUserPasswordRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

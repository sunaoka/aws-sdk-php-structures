<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminConfirmSignUp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property array<string, string> $ClientMetadata
 */
class AdminConfirmSignUpRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     ClientMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

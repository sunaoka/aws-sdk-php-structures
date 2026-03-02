<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserPoolClientSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string $ClientSecretId
 */
class DeleteUserPoolClientSecretRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     ClientSecretId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

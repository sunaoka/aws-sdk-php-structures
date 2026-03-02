<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AddUserPoolClientSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string|null $ClientSecret
 */
class AddUserPoolClientSecretRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     ClientSecret?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

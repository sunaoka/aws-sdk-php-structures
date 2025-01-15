<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserAttributeVerificationCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $AttributeName
 * @property array<string, string>|null $ClientMetadata
 */
class GetUserAttributeVerificationCodeRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     AttributeName: string,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\VerifySoftwareToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $Session
 * @property string $UserCode
 * @property string $FriendlyDeviceName
 */
class VerifySoftwareTokenRequest extends Request
{
    /**
     * @param array{
     *     AccessToken?: string,
     *     Session?: string,
     *     UserCode: string,
     *     FriendlyDeviceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\VerifySoftwareToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccessToken
 * @property string|null $Session
 * @property string $UserCode
 * @property string|null $FriendlyDeviceName
 */
class VerifySoftwareTokenRequest extends Request
{
    /**
     * @param array{
     *     AccessToken?: string|null,
     *     Session?: string|null,
     *     UserCode: string,
     *     FriendlyDeviceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

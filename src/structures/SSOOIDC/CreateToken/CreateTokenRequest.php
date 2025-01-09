<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property string $grantType
 * @property string $deviceCode
 * @property string $code
 * @property string $refreshToken
 * @property list<string> $scope
 * @property string $redirectUri
 * @property string $codeVerifier
 */
class CreateTokenRequest extends Request
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret: string,
     *     grantType: string,
     *     deviceCode?: string,
     *     code?: string,
     *     refreshToken?: string,
     *     scope?: list<string>,
     *     redirectUri?: string,
     *     codeVerifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

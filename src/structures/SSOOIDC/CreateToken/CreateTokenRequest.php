<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property string $grantType
 * @property string|null $deviceCode
 * @property string|null $code
 * @property string|null $refreshToken
 * @property list<string>|null $scope
 * @property string|null $redirectUri
 * @property string|null $codeVerifier
 */
class CreateTokenRequest extends Request
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret: string,
     *     grantType: string,
     *     deviceCode?: string|null,
     *     code?: string|null,
     *     refreshToken?: string|null,
     *     scope?: list<string>|null,
     *     redirectUri?: string|null,
     *     codeVerifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateTokenWithIAM;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientId
 * @property string $grantType
 * @property string|null $code
 * @property string|null $refreshToken
 * @property string|null $assertion
 * @property list<string>|null $scope
 * @property string|null $redirectUri
 * @property string|null $subjectToken
 * @property string|null $subjectTokenType
 * @property string|null $requestedTokenType
 * @property string|null $codeVerifier
 */
class CreateTokenWithIAMRequest extends Request
{
    /**
     * @param array{
     *     clientId: string,
     *     grantType: string,
     *     code?: string|null,
     *     refreshToken?: string|null,
     *     assertion?: string|null,
     *     scope?: list<string>|null,
     *     redirectUri?: string|null,
     *     subjectToken?: string|null,
     *     subjectTokenType?: string|null,
     *     requestedTokenType?: string|null,
     *     codeVerifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

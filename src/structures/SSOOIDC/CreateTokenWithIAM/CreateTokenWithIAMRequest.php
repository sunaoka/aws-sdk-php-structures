<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateTokenWithIAM;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientId
 * @property string $grantType
 * @property string $code
 * @property string $refreshToken
 * @property string $assertion
 * @property list<string> $scope
 * @property string $redirectUri
 * @property string $subjectToken
 * @property string $subjectTokenType
 * @property string $requestedTokenType
 * @property string $codeVerifier
 */
class CreateTokenWithIAMRequest extends Request
{
    /**
     * @param array{
     *     clientId: string,
     *     grantType: string,
     *     code?: string,
     *     refreshToken?: string,
     *     assertion?: string,
     *     scope?: list<string>,
     *     redirectUri?: string,
     *     subjectToken?: string,
     *     subjectTokenType?: string,
     *     requestedTokenType?: string,
     *     codeVerifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

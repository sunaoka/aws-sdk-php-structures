<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateTokenWithIAM;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $accessToken
 * @property string $tokenType
 * @property int $expiresIn
 * @property string $refreshToken
 * @property string $idToken
 * @property string $issuedTokenType
 * @property list<string> $scope
 */
class CreateTokenWithIAMResponse extends Response
{
}

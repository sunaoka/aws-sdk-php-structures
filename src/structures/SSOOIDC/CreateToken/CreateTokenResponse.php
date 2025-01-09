<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateToken;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $accessToken
 * @property string $tokenType
 * @property int $expiresIn
 * @property string $refreshToken
 * @property string $idToken
 */
class CreateTokenResponse extends Response
{
}

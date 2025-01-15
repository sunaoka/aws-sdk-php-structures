<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateToken;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $accessToken
 * @property string|null $tokenType
 * @property int|null $expiresIn
 * @property string|null $refreshToken
 * @property string|null $idToken
 */
class CreateTokenResponse extends Response
{
}

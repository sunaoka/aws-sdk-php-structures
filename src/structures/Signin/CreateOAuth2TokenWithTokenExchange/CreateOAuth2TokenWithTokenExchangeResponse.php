<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2TokenWithTokenExchange;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $accessToken
 * @property string|null $issuedTokenType
 * @property string $tokenType
 * @property int<1, 3600> $expiresIn
 */
class CreateOAuth2TokenWithTokenExchangeResponse extends Response
{
}

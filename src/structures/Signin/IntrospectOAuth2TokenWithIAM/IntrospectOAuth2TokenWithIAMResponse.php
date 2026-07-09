<?php

namespace Sunaoka\Aws\Structures\Signin\IntrospectOAuth2TokenWithIAM;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $active
 * @property string|null $clientId
 * @property string|null $userId
 * @property string|null $tokenType
 * @property int|null $exp
 * @property int|null $iat
 * @property int|null $nbf
 * @property string|null $sub
 * @property string|null $aud
 * @property string|null $iss
 * @property string|null $jti
 * @property string|null $accountId
 * @property string|null $signinSession
 * @property string|null $resource
 */
class IntrospectOAuth2TokenWithIAMResponse extends Response
{
}

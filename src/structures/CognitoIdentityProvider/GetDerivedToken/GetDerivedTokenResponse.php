<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetDerivedToken;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IssuedToken
 * @property 'ACCESS_TOKEN'|'ID_TOKEN' $IssuedTokenType
 * @property 'Bearer'|'N_A' $TokenType
 * @property int|null $ExpiresIn
 * @property list<string>|null $Scopes
 */
class GetDerivedTokenResponse extends Response
{
}

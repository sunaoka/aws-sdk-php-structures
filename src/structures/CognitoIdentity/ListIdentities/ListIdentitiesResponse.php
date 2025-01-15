<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $IdentityPoolId
 * @property list<Shapes\IdentityDescription>|null $Identities
 * @property string|null $NextToken
 */
class ListIdentitiesResponse extends Response
{
}

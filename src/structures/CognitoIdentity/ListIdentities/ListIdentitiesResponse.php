<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IdentityPoolId
 * @property list<Shapes\IdentityDescription> $Identities
 * @property string $NextToken
 */
class ListIdentitiesResponse extends Response
{
}

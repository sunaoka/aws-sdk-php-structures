<?php

namespace Sunaoka\Aws\Structures\Sts\GetFederationToken;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials|null $Credentials
 * @property Shapes\FederatedUser|null $FederatedUser
 * @property int<0, max>|null $PackedPolicySize
 */
class GetFederationTokenResponse extends Response
{
}

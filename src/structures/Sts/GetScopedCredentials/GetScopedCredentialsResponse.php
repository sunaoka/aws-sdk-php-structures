<?php

namespace Sunaoka\Aws\Structures\Sts\GetScopedCredentials;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials|null $Credentials
 * @property Shapes\ScopedSession|null $SessionInfo
 * @property int<0, max>|null $SessionTokenUtilization
 * @property int<0, max>|null $SessionTokenSize
 * @property int<0, max>|null $ScopedPoliciesCount
 * @property string|null $SourceIdentity
 */
class GetScopedCredentialsResponse extends Response
{
}

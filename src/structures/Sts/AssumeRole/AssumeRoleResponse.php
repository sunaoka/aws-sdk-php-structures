<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRole;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials|null $Credentials
 * @property Shapes\AssumedRoleUser|null $AssumedRoleUser
 * @property int<0, max>|null $PackedPolicySize
 * @property string|null $SourceIdentity
 * @property int<0, max>|null $SessionTokenUtilization
 * @property int<0, max>|null $SessionTokenSize
 */
class AssumeRoleResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRole;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials $Credentials
 * @property Shapes\AssumedRoleUser $AssumedRoleUser
 * @property int<0, max> $PackedPolicySize
 * @property string $SourceIdentity
 */
class AssumeRoleResponse extends Response
{
}

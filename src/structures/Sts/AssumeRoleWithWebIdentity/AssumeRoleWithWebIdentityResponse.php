<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithWebIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials|null $Credentials
 * @property string|null $SubjectFromWebIdentityToken
 * @property Shapes\AssumedRoleUser|null $AssumedRoleUser
 * @property int<0, max>|null $PackedPolicySize
 * @property string|null $Provider
 * @property string|null $Audience
 * @property string|null $SourceIdentity
 * @property int<0, max>|null $SessionTokenUtilization
 * @property int<0, max>|null $SessionTokenSize
 */
class AssumeRoleWithWebIdentityResponse extends Response
{
}

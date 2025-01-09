<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithWebIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials $Credentials
 * @property string $SubjectFromWebIdentityToken
 * @property Shapes\AssumedRoleUser $AssumedRoleUser
 * @property int $PackedPolicySize
 * @property string $Provider
 * @property string $Audience
 * @property string $SourceIdentity
 */
class AssumeRoleWithWebIdentityResponse extends Response
{
}

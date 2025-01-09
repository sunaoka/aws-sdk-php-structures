<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithSAML;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials $Credentials
 * @property Shapes\AssumedRoleUser $AssumedRoleUser
 * @property int<0, max> $PackedPolicySize
 * @property string $Subject
 * @property string $SubjectType
 * @property string $Issuer
 * @property string $Audience
 * @property string $NameQualifier
 * @property string $SourceIdentity
 */
class AssumeRoleWithSAMLResponse extends Response
{
}

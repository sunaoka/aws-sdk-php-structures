<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithSAML;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials|null $Credentials
 * @property Shapes\AssumedRoleUser|null $AssumedRoleUser
 * @property int<0, max>|null $PackedPolicySize
 * @property string|null $Subject
 * @property string|null $SubjectType
 * @property string|null $Issuer
 * @property string|null $Audience
 * @property string|null $NameQualifier
 * @property string|null $SourceIdentity
 */
class AssumeRoleWithSAMLResponse extends Response
{
}

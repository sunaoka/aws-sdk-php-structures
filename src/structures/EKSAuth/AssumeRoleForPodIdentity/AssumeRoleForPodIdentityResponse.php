<?php

namespace Sunaoka\Aws\Structures\EKSAuth\AssumeRoleForPodIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Subject $subject
 * @property string $audience
 * @property Shapes\PodIdentityAssociation $podIdentityAssociation
 * @property Shapes\AssumedRoleUser $assumedRoleUser
 * @property Shapes\Credentials $credentials
 */
class AssumeRoleForPodIdentityResponse extends Response
{
}

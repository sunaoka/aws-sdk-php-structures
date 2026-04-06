<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateUserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property 'IAM'|'SSO'|null $type
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED'|null $status
 * @property Shapes\UserProfileDetails|null $details
 */
class CreateUserProfileResponse extends Response
{
}

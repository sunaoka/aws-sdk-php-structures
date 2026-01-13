<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateUserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property 'IAM'|'SSO'|null $type
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED'|null $status
 * @property Shapes\UserProfileDetails|null $details
 */
class UpdateUserProfileResponse extends Response
{
}

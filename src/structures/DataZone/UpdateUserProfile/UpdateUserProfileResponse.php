<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateUserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\UserProfileDetails|null $details
 * @property string|null $domainId
 * @property string|null $id
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED'|null $status
 * @property 'IAM'|'SSO'|null $type
 */
class UpdateUserProfileResponse extends Response
{
}

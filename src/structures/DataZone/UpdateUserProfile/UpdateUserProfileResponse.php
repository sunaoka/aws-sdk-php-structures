<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateUserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\UserProfileDetails $details
 * @property string $domainId
 * @property string $id
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED' $status
 * @property 'IAM'|'SSO' $type
 */
class UpdateUserProfileResponse extends Response
{
}

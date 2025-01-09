<?php

namespace Sunaoka\Aws\Structures\DataZone\GetUserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\UserProfileDetails $details
 * @property string $domainId
 * @property string $id
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED' $status
 * @property 'IAM'|'SSO' $type
 */
class GetUserProfileResponse extends Response
{
}

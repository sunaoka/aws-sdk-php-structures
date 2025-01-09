<?php

namespace Sunaoka\Aws\Structures\DataZone\GetUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamUserProfileDetails $iam
 * @property SsoUserProfileDetails $sso
 */
class UserProfileDetails extends Shape
{
    /**
     * @param array{
     *     iam?: IamUserProfileDetails,
     *     sso?: SsoUserProfileDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamUserProfileDetails|null $iam
 * @property SsoUserProfileDetails|null $sso
 */
class UserProfileDetails extends Shape
{
    /**
     * @param array{
     *     iam?: IamUserProfileDetails|null,
     *     sso?: SsoUserProfileDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

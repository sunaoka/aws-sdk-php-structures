<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserIdentity $user
 * @property GroupIdentity $group
 * @property IAMUserIdentity $iamUser
 * @property IAMRoleIdentity $iamRole
 */
class Identity extends Shape
{
    /**
     * @param array{
     *     user?: UserIdentity,
     *     group?: GroupIdentity,
     *     iamUser?: IAMUserIdentity,
     *     iamRole?: IAMRoleIdentity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

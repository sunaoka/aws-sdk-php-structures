<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserIdentity|null $user
 * @property GroupIdentity|null $group
 * @property IAMUserIdentity|null $iamUser
 * @property IAMRoleIdentity|null $iamRole
 */
class Identity extends Shape
{
    /**
     * @param array{
     *     user?: UserIdentity|null,
     *     group?: GroupIdentity|null,
     *     iamUser?: IAMUserIdentity|null,
     *     iamRole?: IAMRoleIdentity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

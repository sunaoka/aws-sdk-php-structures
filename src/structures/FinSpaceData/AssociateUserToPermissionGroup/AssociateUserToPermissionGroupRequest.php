<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\AssociateUserToPermissionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionGroupId
 * @property string $userId
 * @property string $clientToken
 */
class AssociateUserToPermissionGroupRequest extends Request
{
    /**
     * @param array{
     *     permissionGroupId: string,
     *     userId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

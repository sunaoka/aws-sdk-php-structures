<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\DisassociateUserFromPermissionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionGroupId
 * @property string $userId
 * @property string|null $clientToken
 */
class DisassociateUserFromPermissionGroupRequest extends Request
{
    /**
     * @param array{
     *     permissionGroupId: string,
     *     userId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetPermissionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionGroupId
 */
class GetPermissionGroupRequest extends Request
{
    /**
     * @param array{permissionGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

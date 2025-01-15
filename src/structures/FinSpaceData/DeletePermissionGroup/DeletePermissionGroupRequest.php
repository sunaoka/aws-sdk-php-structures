<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\DeletePermissionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionGroupId
 * @property string|null $clientToken
 */
class DeletePermissionGroupRequest extends Request
{
    /**
     * @param array{
     *     permissionGroupId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\RAM\DeletePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property string|null $clientToken
 */
class DeletePermissionRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

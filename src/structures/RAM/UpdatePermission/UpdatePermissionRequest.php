<?php

namespace Sunaoka\Aws\Structures\RAM\UpdatePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property 'ATTACHABLE'|'DEPRECATED' $status
 * @property string|null $clientToken
 */
class UpdatePermissionRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     status: 'ATTACHABLE'|'DEPRECATED',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

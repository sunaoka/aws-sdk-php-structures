<?php

namespace Sunaoka\Aws\Structures\RAM\GetPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property int $permissionVersion
 */
class GetPermissionRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     permissionVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

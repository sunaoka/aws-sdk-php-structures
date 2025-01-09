<?php

namespace Sunaoka\Aws\Structures\RAM\DeletePermissionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property int $permissionVersion
 * @property string $clientToken
 */
class DeletePermissionVersionRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     permissionVersion: int,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

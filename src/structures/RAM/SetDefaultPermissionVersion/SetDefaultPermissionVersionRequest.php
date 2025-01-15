<?php

namespace Sunaoka\Aws\Structures\RAM\SetDefaultPermissionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property int $permissionVersion
 * @property string|null $clientToken
 */
class SetDefaultPermissionVersionRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     permissionVersion: int,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

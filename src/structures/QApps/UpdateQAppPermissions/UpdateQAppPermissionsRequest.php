<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQAppPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 * @property list<Shapes\PermissionInput>|null $grantPermissions
 * @property list<Shapes\PermissionInput>|null $revokePermissions
 */
class UpdateQAppPermissionsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string,
     *     grantPermissions?: list<Shapes\PermissionInput>|null,
     *     revokePermissions?: list<Shapes\PermissionInput>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

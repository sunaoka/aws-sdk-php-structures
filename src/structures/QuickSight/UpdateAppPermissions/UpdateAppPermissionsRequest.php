<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAppPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AppId
 * @property list<Shapes\ResourcePermission>|null $GrantPermissions
 * @property list<Shapes\ResourcePermission>|null $RevokePermissions
 * @property 'PRIVATE'|'PUBLIC'|null $Visibility
 */
class UpdateAppPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AppId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>|null,
     *     RevokePermissions?: list<Shapes\ResourcePermission>|null,
     *     Visibility?: 'PRIVATE'|'PUBLIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

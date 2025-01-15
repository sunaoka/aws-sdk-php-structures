<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property list<Shapes\ResourcePermission>|null $GrantPermissions
 * @property list<Shapes\ResourcePermission>|null $RevokePermissions
 * @property list<Shapes\ResourcePermission>|null $GrantLinkPermissions
 * @property list<Shapes\ResourcePermission>|null $RevokeLinkPermissions
 */
class UpdateDashboardPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>|null,
     *     RevokePermissions?: list<Shapes\ResourcePermission>|null,
     *     GrantLinkPermissions?: list<Shapes\ResourcePermission>|null,
     *     RevokeLinkPermissions?: list<Shapes\ResourcePermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

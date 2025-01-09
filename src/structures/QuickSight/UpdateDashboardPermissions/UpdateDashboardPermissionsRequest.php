<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property list<Shapes\ResourcePermission> $GrantPermissions
 * @property list<Shapes\ResourcePermission> $RevokePermissions
 * @property list<Shapes\ResourcePermission> $GrantLinkPermissions
 * @property list<Shapes\ResourcePermission> $RevokeLinkPermissions
 */
class UpdateDashboardPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>,
     *     RevokePermissions?: list<Shapes\ResourcePermission>,
     *     GrantLinkPermissions?: list<Shapes\ResourcePermission>,
     *     RevokeLinkPermissions?: list<Shapes\ResourcePermission>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

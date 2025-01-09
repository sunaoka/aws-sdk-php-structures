<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DashboardArn
 * @property string $DashboardId
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property string $RequestId
 * @property int $Status
 * @property Shapes\LinkSharingConfiguration $LinkSharingConfiguration
 */
class UpdateDashboardPermissionsResponse extends Response
{
}

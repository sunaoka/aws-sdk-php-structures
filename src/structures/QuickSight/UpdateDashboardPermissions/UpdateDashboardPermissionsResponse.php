<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DashboardArn
 * @property string|null $DashboardId
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property string|null $RequestId
 * @property int|null $Status
 * @property Shapes\LinkSharingConfiguration|null $LinkSharingConfiguration
 */
class UpdateDashboardPermissionsResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DashboardId
 * @property string|null $DashboardArn
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property int|null $Status
 * @property string|null $RequestId
 * @property Shapes\LinkSharingConfiguration|null $LinkSharingConfiguration
 */
class DescribeDashboardPermissionsResponse extends Response
{
}

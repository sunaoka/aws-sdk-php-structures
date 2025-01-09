<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DashboardId
 * @property string $DashboardArn
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property int $Status
 * @property string $RequestId
 * @property Shapes\LinkSharingConfiguration $LinkSharingConfiguration
 */
class DescribeDashboardPermissionsResponse extends Response
{
}

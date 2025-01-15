<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSourcePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DataSourceArn
 * @property string|null $DataSourceId
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeDataSourcePermissionsResponse extends Response
{
}

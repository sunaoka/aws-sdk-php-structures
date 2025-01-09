<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSourcePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DataSourceArn
 * @property string $DataSourceId
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property string $RequestId
 * @property int $Status
 */
class DescribeDataSourcePermissionsResponse extends Response
{
}

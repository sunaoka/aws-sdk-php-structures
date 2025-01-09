<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSetPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DataSetArn
 * @property string $DataSetId
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property string $RequestId
 * @property int $Status
 */
class DescribeDataSetPermissionsResponse extends Response
{
}

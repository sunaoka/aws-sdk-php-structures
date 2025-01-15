<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSetPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DataSetArn
 * @property string|null $DataSetId
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeDataSetPermissionsResponse extends Response
{
}

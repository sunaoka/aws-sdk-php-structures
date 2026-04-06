<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnectorPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $ActionConnectorId
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeActionConnectorPermissionsResponse extends Response
{
}

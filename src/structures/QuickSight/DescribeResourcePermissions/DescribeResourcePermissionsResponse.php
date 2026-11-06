<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeResourcePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUICKSIGHT_MANAGED'|'CUSTOMER_MANAGED'|null $RoleType
 * @property string|null $CustomerManagedRoleArn
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeResourcePermissionsResponse extends Response
{
}

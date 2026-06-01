<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSpacePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property string|null $spaceArn
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property string|null $RequestId
 */
class DescribeSpacePermissionsResponse extends Response
{
}

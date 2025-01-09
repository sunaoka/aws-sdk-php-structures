<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeThemePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ThemeId
 * @property string $ThemeArn
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property string $RequestId
 * @property int $Status
 */
class DescribeThemePermissionsResponse extends Response
{
}

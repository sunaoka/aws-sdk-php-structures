<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplatePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TemplateId
 * @property string $TemplateArn
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property string $RequestId
 * @property int $Status
 */
class DescribeTemplatePermissionsResponse extends Response
{
}

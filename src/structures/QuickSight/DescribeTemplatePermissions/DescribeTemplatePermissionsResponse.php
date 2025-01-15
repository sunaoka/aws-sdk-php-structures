<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplatePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TemplateId
 * @property string|null $TemplateArn
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeTemplatePermissionsResponse extends Response
{
}

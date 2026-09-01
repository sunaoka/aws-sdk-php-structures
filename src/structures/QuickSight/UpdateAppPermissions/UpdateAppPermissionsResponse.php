<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAppPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $AppId
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property 'PRIVATE'|'PUBLIC'|null $Visibility
 * @property string|null $RequestId
 */
class UpdateAppPermissionsResponse extends Response
{
}

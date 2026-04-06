<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolderPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $Status
 * @property string|null $FolderId
 * @property string|null $Arn
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property string|null $RequestId
 * @property string|null $NextToken
 */
class DescribeFolderPermissionsResponse extends Response
{
}

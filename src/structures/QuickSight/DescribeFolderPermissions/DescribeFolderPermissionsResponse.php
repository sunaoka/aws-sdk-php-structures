<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolderPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Status
 * @property string $FolderId
 * @property string $Arn
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property string $RequestId
 * @property string $NextToken
 */
class DescribeFolderPermissionsResponse extends Response
{
}

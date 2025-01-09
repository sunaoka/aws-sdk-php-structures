<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateFolderPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 * @property list<Shapes\ResourcePermission> $GrantPermissions
 * @property list<Shapes\ResourcePermission> $RevokePermissions
 */
class UpdateFolderPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>,
     *     RevokePermissions?: list<Shapes\ResourcePermission>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

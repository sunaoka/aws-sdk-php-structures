<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 * @property string $Name
 * @property 'SHARED'|'RESTRICTED' $FolderType
 * @property string $ParentFolderArn
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property list<Shapes\Tag> $Tags
 * @property 'ACCOUNT'|'NAMESPACE' $SharingModel
 */
class CreateFolderRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string,
     *     Name?: string,
     *     FolderType?: 'SHARED'|'RESTRICTED',
     *     ParentFolderArn?: string,
     *     Permissions?: list<Shapes\ResourcePermission>,
     *     Tags?: list<Shapes\Tag>,
     *     SharingModel?: 'ACCOUNT'|'NAMESPACE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

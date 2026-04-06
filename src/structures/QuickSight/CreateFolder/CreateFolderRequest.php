<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 * @property string|null $Name
 * @property 'SHARED'|null $FolderType
 * @property string|null $ParentFolderArn
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateFolderRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string,
     *     Name?: string|null,
     *     FolderType?: 'SHARED'|null,
     *     ParentFolderArn?: string|null,
     *     Permissions?: list<Shapes\ResourcePermission>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

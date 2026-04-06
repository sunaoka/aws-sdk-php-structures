<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFolders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $FolderId
 * @property string|null $Name
 * @property 'SHARED'|'RESTRICTED'|null $FolderType
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'ACCOUNT'|'NAMESPACE'|null $SharingModel
 */
class FolderSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     FolderId?: string|null,
     *     Name?: string|null,
     *     FolderType?: 'SHARED'|'RESTRICTED'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     SharingModel?: 'ACCOUNT'|'NAMESPACE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

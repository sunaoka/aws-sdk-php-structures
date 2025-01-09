<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFolders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $FolderId
 * @property string $Name
 * @property 'SHARED'|'RESTRICTED' $FolderType
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'ACCOUNT'|'NAMESPACE' $SharingModel
 */
class FolderSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     FolderId?: string,
     *     Name?: string,
     *     FolderType?: 'SHARED'|'RESTRICTED',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     SharingModel?: 'ACCOUNT'|'NAMESPACE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

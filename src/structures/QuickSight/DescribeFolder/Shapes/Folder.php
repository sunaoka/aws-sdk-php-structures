<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FolderId
 * @property string $Arn
 * @property string $Name
 * @property 'SHARED'|'RESTRICTED' $FolderType
 * @property list<string> $FolderPath
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'ACCOUNT'|'NAMESPACE' $SharingModel
 */
class Folder extends Shape
{
    /**
     * @param array{
     *     FolderId?: string,
     *     Arn?: string,
     *     Name?: string,
     *     FolderType?: 'SHARED'|'RESTRICTED',
     *     FolderPath?: list<string>,
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

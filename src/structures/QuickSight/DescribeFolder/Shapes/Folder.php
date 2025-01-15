<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FolderId
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'SHARED'|'RESTRICTED'|null $FolderType
 * @property list<string>|null $FolderPath
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'ACCOUNT'|'NAMESPACE'|null $SharingModel
 */
class Folder extends Shape
{
    /**
     * @param array{
     *     FolderId?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     FolderType?: 'SHARED'|'RESTRICTED'|null,
     *     FolderPath?: list<string>|null,
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

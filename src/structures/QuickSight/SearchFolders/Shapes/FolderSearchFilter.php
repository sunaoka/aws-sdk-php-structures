<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchFolders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringLike'|null $Operator
 * @property 'PARENT_FOLDER_ARN'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'FOLDER_NAME'|null $Name
 * @property string|null $Value
 */
class FolderSearchFilter extends Shape
{
    /**
     * @param array{
     *     Operator?: 'StringEquals'|'StringLike'|null,
     *     Name?: 'PARENT_FOLDER_ARN'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'FOLDER_NAME'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchFolders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringLike' $Operator
 * @property 'PARENT_FOLDER_ARN'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'FOLDER_NAME' $Name
 * @property string $Value
 */
class FolderSearchFilter extends Shape
{
    /**
     * @param array{
     *     Operator?: 'StringEquals'|'StringLike',
     *     Name?: 'PARENT_FOLDER_ARN'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'FOLDER_NAME',
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

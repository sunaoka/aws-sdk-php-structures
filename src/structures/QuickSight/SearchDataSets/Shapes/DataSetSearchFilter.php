<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDataSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringLike' $Operator
 * @property 'QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DATASET_NAME' $Name
 * @property string $Value
 */
class DataSetSearchFilter extends Shape
{
    /**
     * @param array{
     *     Operator: 'StringEquals'|'StringLike',
     *     Name: 'QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DATASET_NAME',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

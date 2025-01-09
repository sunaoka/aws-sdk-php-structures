<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProjectOperation $ProjectOperation
 * @property FilterOperation $FilterOperation
 * @property CreateColumnsOperation $CreateColumnsOperation
 * @property RenameColumnOperation $RenameColumnOperation
 * @property CastColumnTypeOperation $CastColumnTypeOperation
 * @property TagColumnOperation $TagColumnOperation
 * @property UntagColumnOperation $UntagColumnOperation
 * @property OverrideDatasetParameterOperation $OverrideDatasetParameterOperation
 */
class TransformOperation extends Shape
{
    /**
     * @param array{
     *     ProjectOperation?: ProjectOperation,
     *     FilterOperation?: FilterOperation,
     *     CreateColumnsOperation?: CreateColumnsOperation,
     *     RenameColumnOperation?: RenameColumnOperation,
     *     CastColumnTypeOperation?: CastColumnTypeOperation,
     *     TagColumnOperation?: TagColumnOperation,
     *     UntagColumnOperation?: UntagColumnOperation,
     *     OverrideDatasetParameterOperation?: OverrideDatasetParameterOperation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

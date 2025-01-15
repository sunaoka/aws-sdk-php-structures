<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProjectOperation|null $ProjectOperation
 * @property FilterOperation|null $FilterOperation
 * @property CreateColumnsOperation|null $CreateColumnsOperation
 * @property RenameColumnOperation|null $RenameColumnOperation
 * @property CastColumnTypeOperation|null $CastColumnTypeOperation
 * @property TagColumnOperation|null $TagColumnOperation
 * @property UntagColumnOperation|null $UntagColumnOperation
 * @property OverrideDatasetParameterOperation|null $OverrideDatasetParameterOperation
 */
class TransformOperation extends Shape
{
    /**
     * @param array{
     *     ProjectOperation?: ProjectOperation|null,
     *     FilterOperation?: FilterOperation|null,
     *     CreateColumnsOperation?: CreateColumnsOperation|null,
     *     RenameColumnOperation?: RenameColumnOperation|null,
     *     CastColumnTypeOperation?: CastColumnTypeOperation|null,
     *     TagColumnOperation?: TagColumnOperation|null,
     *     UntagColumnOperation?: UntagColumnOperation|null,
     *     OverrideDatasetParameterOperation?: OverrideDatasetParameterOperation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

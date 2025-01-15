<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldLabelType|null $FieldLabelType
 * @property DataPathLabelType|null $DataPathLabelType
 * @property RangeEndsLabelType|null $RangeEndsLabelType
 * @property MinimumLabelType|null $MinimumLabelType
 * @property MaximumLabelType|null $MaximumLabelType
 */
class DataLabelType extends Shape
{
    /**
     * @param array{
     *     FieldLabelType?: FieldLabelType|null,
     *     DataPathLabelType?: DataPathLabelType|null,
     *     RangeEndsLabelType?: RangeEndsLabelType|null,
     *     MinimumLabelType?: MinimumLabelType|null,
     *     MaximumLabelType?: MaximumLabelType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

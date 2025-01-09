<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldLabelType $FieldLabelType
 * @property DataPathLabelType $DataPathLabelType
 * @property RangeEndsLabelType $RangeEndsLabelType
 * @property MinimumLabelType $MinimumLabelType
 * @property MaximumLabelType $MaximumLabelType
 */
class DataLabelType extends Shape
{
    /**
     * @param array{
     *     FieldLabelType?: FieldLabelType,
     *     DataPathLabelType?: DataPathLabelType,
     *     RangeEndsLabelType?: RangeEndsLabelType,
     *     MinimumLabelType?: MinimumLabelType,
     *     MaximumLabelType?: MaximumLabelType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

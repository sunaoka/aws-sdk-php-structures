<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MeasureField> $Values
 * @property list<MeasureField> $TargetValues
 * @property list<DimensionField> $TrendGroups
 */
class KPIFieldWells extends Shape
{
    /**
     * @param array{
     *     Values?: list<MeasureField>,
     *     TargetValues?: list<MeasureField>,
     *     TrendGroups?: list<DimensionField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MeasureField>|null $Values
 * @property list<MeasureField>|null $TargetValues
 * @property list<DimensionField>|null $TrendGroups
 */
class KPIFieldWells extends Shape
{
    /**
     * @param array{
     *     Values?: list<MeasureField>|null,
     *     TargetValues?: list<MeasureField>|null,
     *     TrendGroups?: list<DimensionField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

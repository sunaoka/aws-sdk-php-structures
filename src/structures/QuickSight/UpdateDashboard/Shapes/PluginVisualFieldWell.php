<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GROUP_BY'|'VALUE' $AxisName
 * @property list<DimensionField> $Dimensions
 * @property list<MeasureField> $Measures
 * @property list<UnaggregatedField> $Unaggregated
 */
class PluginVisualFieldWell extends Shape
{
    /**
     * @param array{
     *     AxisName?: 'GROUP_BY'|'VALUE',
     *     Dimensions?: list<DimensionField>,
     *     Measures?: list<MeasureField>,
     *     Unaggregated?: list<UnaggregatedField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

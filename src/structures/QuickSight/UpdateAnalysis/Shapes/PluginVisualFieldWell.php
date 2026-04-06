<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GROUP_BY'|'VALUE'|null $AxisName
 * @property list<DimensionField>|null $Dimensions
 * @property list<MeasureField>|null $Measures
 * @property list<UnaggregatedField>|null $Unaggregated
 */
class PluginVisualFieldWell extends Shape
{
    /**
     * @param array{
     *     AxisName?: 'GROUP_BY'|'VALUE'|null,
     *     Dimensions?: list<DimensionField>|null,
     *     Measures?: list<MeasureField>|null,
     *     Unaggregated?: list<UnaggregatedField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

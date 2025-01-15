<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MeasureField>|null $Values
 * @property list<MeasureField>|null $TargetValues
 */
class GaugeChartFieldWells extends Shape
{
    /**
     * @param array{
     *     Values?: list<MeasureField>|null,
     *     TargetValues?: list<MeasureField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

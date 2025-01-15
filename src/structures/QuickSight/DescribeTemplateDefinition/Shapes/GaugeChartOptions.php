<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'COMPARISON'|'ACTUAL'|null $PrimaryValueDisplayType
 * @property ComparisonConfiguration|null $Comparison
 * @property ArcAxisConfiguration|null $ArcAxis
 * @property ArcConfiguration|null $Arc
 * @property FontConfiguration|null $PrimaryValueFontConfiguration
 */
class GaugeChartOptions extends Shape
{
    /**
     * @param array{
     *     PrimaryValueDisplayType?: 'HIDDEN'|'COMPARISON'|'ACTUAL'|null,
     *     Comparison?: ComparisonConfiguration|null,
     *     ArcAxis?: ArcAxisConfiguration|null,
     *     Arc?: ArcConfiguration|null,
     *     PrimaryValueFontConfiguration?: FontConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

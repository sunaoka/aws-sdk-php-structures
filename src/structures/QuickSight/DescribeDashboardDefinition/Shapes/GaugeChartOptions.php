<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'COMPARISON'|'ACTUAL' $PrimaryValueDisplayType
 * @property ComparisonConfiguration $Comparison
 * @property ArcAxisConfiguration $ArcAxis
 * @property ArcConfiguration $Arc
 * @property FontConfiguration $PrimaryValueFontConfiguration
 */
class GaugeChartOptions extends Shape
{
    /**
     * @param array{
     *     PrimaryValueDisplayType?: 'HIDDEN'|'COMPARISON'|'ACTUAL',
     *     Comparison?: ComparisonConfiguration,
     *     ArcAxis?: ArcAxisConfiguration,
     *     Arc?: ArcConfiguration,
     *     PrimaryValueFontConfiguration?: FontConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

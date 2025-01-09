<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProgressBarOptions $ProgressBar
 * @property TrendArrowOptions $TrendArrows
 * @property SecondaryValueOptions $SecondaryValue
 * @property ComparisonConfiguration $Comparison
 * @property 'HIDDEN'|'COMPARISON'|'ACTUAL' $PrimaryValueDisplayType
 * @property FontConfiguration $PrimaryValueFontConfiguration
 * @property FontConfiguration $SecondaryValueFontConfiguration
 * @property KPISparklineOptions $Sparkline
 * @property KPIVisualLayoutOptions $VisualLayoutOptions
 */
class KPIOptions extends Shape
{
    /**
     * @param array{
     *     ProgressBar?: ProgressBarOptions,
     *     TrendArrows?: TrendArrowOptions,
     *     SecondaryValue?: SecondaryValueOptions,
     *     Comparison?: ComparisonConfiguration,
     *     PrimaryValueDisplayType?: 'HIDDEN'|'COMPARISON'|'ACTUAL',
     *     PrimaryValueFontConfiguration?: FontConfiguration,
     *     SecondaryValueFontConfiguration?: FontConfiguration,
     *     Sparkline?: KPISparklineOptions,
     *     VisualLayoutOptions?: KPIVisualLayoutOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

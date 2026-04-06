<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProgressBarOptions|null $ProgressBar
 * @property TrendArrowOptions|null $TrendArrows
 * @property SecondaryValueOptions|null $SecondaryValue
 * @property ComparisonConfiguration|null $Comparison
 * @property 'HIDDEN'|'COMPARISON'|'ACTUAL'|null $PrimaryValueDisplayType
 * @property FontConfiguration|null $PrimaryValueFontConfiguration
 * @property FontConfiguration|null $SecondaryValueFontConfiguration
 * @property KPISparklineOptions|null $Sparkline
 * @property KPIVisualLayoutOptions|null $VisualLayoutOptions
 */
class KPIOptions extends Shape
{
    /**
     * @param array{
     *     ProgressBar?: ProgressBarOptions|null,
     *     TrendArrows?: TrendArrowOptions|null,
     *     SecondaryValue?: SecondaryValueOptions|null,
     *     Comparison?: ComparisonConfiguration|null,
     *     PrimaryValueDisplayType?: 'HIDDEN'|'COMPARISON'|'ACTUAL'|null,
     *     PrimaryValueFontConfiguration?: FontConfiguration|null,
     *     SecondaryValueFontConfiguration?: FontConfiguration|null,
     *     Sparkline?: KPISparklineOptions|null,
     *     VisualLayoutOptions?: KPIVisualLayoutOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

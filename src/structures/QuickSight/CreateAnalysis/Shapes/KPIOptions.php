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
     *     SecondaryValueFontConfiguration?: FontConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

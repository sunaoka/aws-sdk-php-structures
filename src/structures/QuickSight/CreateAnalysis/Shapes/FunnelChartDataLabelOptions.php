<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property 'HIDDEN'|'VISIBLE'|null $CategoryLabelVisibility
 * @property 'HIDDEN'|'VISIBLE'|null $MeasureLabelVisibility
 * @property 'INSIDE'|'OUTSIDE'|'LEFT'|'TOP'|'BOTTOM'|'RIGHT'|null $Position
 * @property FontConfiguration|null $LabelFontConfiguration
 * @property string|null $LabelColor
 * @property 'VALUE_ONLY'|'PERCENTAGE_BY_FIRST_STAGE'|'PERCENTAGE_BY_PREVIOUS_STAGE'|'VALUE_AND_PERCENTAGE_BY_FIRST_STAGE'|'VALUE_AND_PERCENTAGE_BY_PREVIOUS_STAGE'|null $MeasureDataLabelStyle
 */
class FunnelChartDataLabelOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     CategoryLabelVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     MeasureLabelVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Position?: 'INSIDE'|'OUTSIDE'|'LEFT'|'TOP'|'BOTTOM'|'RIGHT'|null,
     *     LabelFontConfiguration?: FontConfiguration|null,
     *     LabelColor?: string|null,
     *     MeasureDataLabelStyle?: 'VALUE_ONLY'|'PERCENTAGE_BY_FIRST_STAGE'|'PERCENTAGE_BY_PREVIOUS_STAGE'|'VALUE_AND_PERCENTAGE_BY_FIRST_STAGE'|'VALUE_AND_PERCENTAGE_BY_PREVIOUS_STAGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

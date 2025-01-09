<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property 'HIDDEN'|'VISIBLE' $CategoryLabelVisibility
 * @property 'HIDDEN'|'VISIBLE' $MeasureLabelVisibility
 * @property 'INSIDE'|'OUTSIDE'|'LEFT'|'TOP'|'BOTTOM'|'RIGHT' $Position
 * @property FontConfiguration $LabelFontConfiguration
 * @property string $LabelColor
 * @property 'VALUE_ONLY'|'PERCENTAGE_BY_FIRST_STAGE'|'PERCENTAGE_BY_PREVIOUS_STAGE'|'VALUE_AND_PERCENTAGE_BY_FIRST_STAGE'|'VALUE_AND_PERCENTAGE_BY_PREVIOUS_STAGE' $MeasureDataLabelStyle
 */
class FunnelChartDataLabelOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     CategoryLabelVisibility?: 'HIDDEN'|'VISIBLE',
     *     MeasureLabelVisibility?: 'HIDDEN'|'VISIBLE',
     *     Position?: 'INSIDE'|'OUTSIDE'|'LEFT'|'TOP'|'BOTTOM'|'RIGHT',
     *     LabelFontConfiguration?: FontConfiguration,
     *     LabelColor?: string,
     *     MeasureDataLabelStyle?: 'VALUE_ONLY'|'PERCENTAGE_BY_FIRST_STAGE'|'PERCENTAGE_BY_PREVIOUS_STAGE'|'VALUE_AND_PERCENTAGE_BY_FIRST_STAGE'|'VALUE_AND_PERCENTAGE_BY_PREVIOUS_STAGE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

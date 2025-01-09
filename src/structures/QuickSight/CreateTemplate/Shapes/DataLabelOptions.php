<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property 'HIDDEN'|'VISIBLE' $CategoryLabelVisibility
 * @property 'HIDDEN'|'VISIBLE' $MeasureLabelVisibility
 * @property list<DataLabelType> $DataLabelTypes
 * @property 'INSIDE'|'OUTSIDE'|'LEFT'|'TOP'|'BOTTOM'|'RIGHT' $Position
 * @property 'VALUE'|'PERCENT'|'VALUE_AND_PERCENT' $LabelContent
 * @property FontConfiguration $LabelFontConfiguration
 * @property string $LabelColor
 * @property 'DISABLE_OVERLAP'|'ENABLE_OVERLAP' $Overlap
 * @property 'HIDDEN'|'VISIBLE' $TotalsVisibility
 */
class DataLabelOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     CategoryLabelVisibility?: 'HIDDEN'|'VISIBLE',
     *     MeasureLabelVisibility?: 'HIDDEN'|'VISIBLE',
     *     DataLabelTypes?: list<DataLabelType>,
     *     Position?: 'INSIDE'|'OUTSIDE'|'LEFT'|'TOP'|'BOTTOM'|'RIGHT',
     *     LabelContent?: 'VALUE'|'PERCENT'|'VALUE_AND_PERCENT',
     *     LabelFontConfiguration?: FontConfiguration,
     *     LabelColor?: string,
     *     Overlap?: 'DISABLE_OVERLAP'|'ENABLE_OVERLAP',
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

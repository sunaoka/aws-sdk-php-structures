<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property 'HIDDEN'|'VISIBLE'|null $CategoryLabelVisibility
 * @property 'HIDDEN'|'VISIBLE'|null $MeasureLabelVisibility
 * @property list<DataLabelType>|null $DataLabelTypes
 * @property 'INSIDE'|'OUTSIDE'|'LEFT'|'TOP'|'BOTTOM'|'RIGHT'|null $Position
 * @property 'VALUE'|'PERCENT'|'VALUE_AND_PERCENT'|null $LabelContent
 * @property FontConfiguration|null $LabelFontConfiguration
 * @property string|null $LabelColor
 * @property 'DISABLE_OVERLAP'|'ENABLE_OVERLAP'|null $Overlap
 * @property 'HIDDEN'|'VISIBLE'|null $TotalsVisibility
 */
class DataLabelOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     CategoryLabelVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     MeasureLabelVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     DataLabelTypes?: list<DataLabelType>|null,
     *     Position?: 'INSIDE'|'OUTSIDE'|'LEFT'|'TOP'|'BOTTOM'|'RIGHT'|null,
     *     LabelContent?: 'VALUE'|'PERCENT'|'VALUE_AND_PERCENT'|null,
     *     LabelFontConfiguration?: FontConfiguration|null,
     *     LabelColor?: string|null,
     *     Overlap?: 'DISABLE_OVERLAP'|'ENABLE_OVERLAP'|null,
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

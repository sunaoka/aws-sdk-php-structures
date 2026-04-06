<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterDateTimePickerControl|null $DateTimePicker
 * @property FilterListControl|null $List
 * @property FilterDropDownControl|null $Dropdown
 * @property FilterTextFieldControl|null $TextField
 * @property FilterTextAreaControl|null $TextArea
 * @property FilterSliderControl|null $Slider
 * @property FilterRelativeDateTimeControl|null $RelativeDateTime
 * @property FilterCrossSheetControl|null $CrossSheet
 */
class FilterControl extends Shape
{
    /**
     * @param array{
     *     DateTimePicker?: FilterDateTimePickerControl|null,
     *     List?: FilterListControl|null,
     *     Dropdown?: FilterDropDownControl|null,
     *     TextField?: FilterTextFieldControl|null,
     *     TextArea?: FilterTextAreaControl|null,
     *     Slider?: FilterSliderControl|null,
     *     RelativeDateTime?: FilterRelativeDateTimeControl|null,
     *     CrossSheet?: FilterCrossSheetControl|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

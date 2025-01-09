<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterDateTimePickerControl $DateTimePicker
 * @property FilterListControl $List
 * @property FilterDropDownControl $Dropdown
 * @property FilterTextFieldControl $TextField
 * @property FilterTextAreaControl $TextArea
 * @property FilterSliderControl $Slider
 * @property FilterRelativeDateTimeControl $RelativeDateTime
 * @property FilterCrossSheetControl $CrossSheet
 */
class FilterControl extends Shape
{
    /**
     * @param array{
     *     DateTimePicker?: FilterDateTimePickerControl,
     *     List?: FilterListControl,
     *     Dropdown?: FilterDropDownControl,
     *     TextField?: FilterTextFieldControl,
     *     TextArea?: FilterTextAreaControl,
     *     Slider?: FilterSliderControl,
     *     RelativeDateTime?: FilterRelativeDateTimeControl,
     *     CrossSheet?: FilterCrossSheetControl
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

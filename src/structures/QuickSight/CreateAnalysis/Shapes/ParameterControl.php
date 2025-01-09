<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParameterDateTimePickerControl $DateTimePicker
 * @property ParameterListControl $List
 * @property ParameterDropDownControl $Dropdown
 * @property ParameterTextFieldControl $TextField
 * @property ParameterTextAreaControl $TextArea
 * @property ParameterSliderControl $Slider
 */
class ParameterControl extends Shape
{
    /**
     * @param array{
     *     DateTimePicker?: ParameterDateTimePickerControl,
     *     List?: ParameterListControl,
     *     Dropdown?: ParameterDropDownControl,
     *     TextField?: ParameterTextFieldControl,
     *     TextArea?: ParameterTextAreaControl,
     *     Slider?: ParameterSliderControl
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParameterDateTimePickerControl|null $DateTimePicker
 * @property ParameterListControl|null $List
 * @property ParameterDropDownControl|null $Dropdown
 * @property ParameterTextFieldControl|null $TextField
 * @property ParameterTextAreaControl|null $TextArea
 * @property ParameterSliderControl|null $Slider
 */
class ParameterControl extends Shape
{
    /**
     * @param array{
     *     DateTimePicker?: ParameterDateTimePickerControl|null,
     *     List?: ParameterListControl|null,
     *     Dropdown?: ParameterDropDownControl|null,
     *     TextField?: ParameterTextFieldControl|null,
     *     TextArea?: ParameterTextAreaControl|null,
     *     Slider?: ParameterSliderControl|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

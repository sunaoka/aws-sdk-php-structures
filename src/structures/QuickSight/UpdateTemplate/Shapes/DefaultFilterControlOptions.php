<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultDateTimePickerControlOptions $DefaultDateTimePickerOptions
 * @property DefaultFilterListControlOptions $DefaultListOptions
 * @property DefaultFilterDropDownControlOptions $DefaultDropdownOptions
 * @property DefaultTextFieldControlOptions $DefaultTextFieldOptions
 * @property DefaultTextAreaControlOptions $DefaultTextAreaOptions
 * @property DefaultSliderControlOptions $DefaultSliderOptions
 * @property DefaultRelativeDateTimeControlOptions $DefaultRelativeDateTimeOptions
 */
class DefaultFilterControlOptions extends Shape
{
    /**
     * @param array{
     *     DefaultDateTimePickerOptions?: DefaultDateTimePickerControlOptions,
     *     DefaultListOptions?: DefaultFilterListControlOptions,
     *     DefaultDropdownOptions?: DefaultFilterDropDownControlOptions,
     *     DefaultTextFieldOptions?: DefaultTextFieldControlOptions,
     *     DefaultTextAreaOptions?: DefaultTextAreaControlOptions,
     *     DefaultSliderOptions?: DefaultSliderControlOptions,
     *     DefaultRelativeDateTimeOptions?: DefaultRelativeDateTimeControlOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

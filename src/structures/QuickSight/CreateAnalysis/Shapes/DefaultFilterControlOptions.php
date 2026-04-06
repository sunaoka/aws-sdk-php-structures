<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultDateTimePickerControlOptions|null $DefaultDateTimePickerOptions
 * @property DefaultFilterListControlOptions|null $DefaultListOptions
 * @property DefaultFilterDropDownControlOptions|null $DefaultDropdownOptions
 * @property DefaultTextFieldControlOptions|null $DefaultTextFieldOptions
 * @property DefaultTextAreaControlOptions|null $DefaultTextAreaOptions
 * @property DefaultSliderControlOptions|null $DefaultSliderOptions
 * @property DefaultRelativeDateTimeControlOptions|null $DefaultRelativeDateTimeOptions
 */
class DefaultFilterControlOptions extends Shape
{
    /**
     * @param array{
     *     DefaultDateTimePickerOptions?: DefaultDateTimePickerControlOptions|null,
     *     DefaultListOptions?: DefaultFilterListControlOptions|null,
     *     DefaultDropdownOptions?: DefaultFilterDropDownControlOptions|null,
     *     DefaultTextFieldOptions?: DefaultTextFieldControlOptions|null,
     *     DefaultTextAreaOptions?: DefaultTextAreaControlOptions|null,
     *     DefaultSliderOptions?: DefaultSliderControlOptions|null,
     *     DefaultRelativeDateTimeOptions?: DefaultRelativeDateTimeControlOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions $TitleOptions
 * @property string $DateTimeFormat
 * @property SheetControlInfoIconLabelOptions $InfoIconLabelOptions
 * @property 'HIDDEN'|'VISIBLE' $HelperTextVisibility
 * @property 'HIDDEN'|'VISIBLE' $DateIconVisibility
 */
class DateTimePickerControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TitleOptions?: LabelOptions,
     *     DateTimeFormat?: string,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions,
     *     HelperTextVisibility?: 'HIDDEN'|'VISIBLE',
     *     DateIconVisibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

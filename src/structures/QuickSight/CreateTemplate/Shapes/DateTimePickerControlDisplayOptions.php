<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions|null $TitleOptions
 * @property string|null $DateTimeFormat
 * @property SheetControlInfoIconLabelOptions|null $InfoIconLabelOptions
 * @property 'HIDDEN'|'VISIBLE'|null $HelperTextVisibility
 * @property 'HIDDEN'|'VISIBLE'|null $DateIconVisibility
 */
class DateTimePickerControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TitleOptions?: LabelOptions|null,
     *     DateTimeFormat?: string|null,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions|null,
     *     HelperTextVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     DateIconVisibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

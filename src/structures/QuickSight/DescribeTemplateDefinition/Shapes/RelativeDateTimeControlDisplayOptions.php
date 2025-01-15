<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions|null $TitleOptions
 * @property string|null $DateTimeFormat
 * @property SheetControlInfoIconLabelOptions|null $InfoIconLabelOptions
 */
class RelativeDateTimeControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TitleOptions?: LabelOptions|null,
     *     DateTimeFormat?: string|null,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

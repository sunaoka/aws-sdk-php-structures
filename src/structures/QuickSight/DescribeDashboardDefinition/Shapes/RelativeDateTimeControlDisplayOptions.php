<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions $TitleOptions
 * @property string $DateTimeFormat
 * @property SheetControlInfoIconLabelOptions $InfoIconLabelOptions
 */
class RelativeDateTimeControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TitleOptions?: LabelOptions,
     *     DateTimeFormat?: string,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

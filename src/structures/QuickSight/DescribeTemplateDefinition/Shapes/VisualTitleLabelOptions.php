<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property ShortFormatText|null $FormatText
 */
class VisualTitleLabelOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     FormatText?: ShortFormatText|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property LongFormatText $FormatText
 */
class VisualSubtitleLabelOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     FormatText?: LongFormatText
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

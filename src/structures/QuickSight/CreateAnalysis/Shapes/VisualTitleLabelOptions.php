<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property ShortFormatText $FormatText
 */
class VisualTitleLabelOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     FormatText?: ShortFormatText
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

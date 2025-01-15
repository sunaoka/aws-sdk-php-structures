<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property 'PLUS_MINUS'|'CHECK_X'|'THREE_COLOR_ARROW'|'THREE_GRAY_ARROW'|'CARET_UP_MINUS_DOWN'|'THREE_SHAPE'|'THREE_CIRCLE'|'FLAGS'|'BARS'|'FOUR_COLOR_ARROW'|'FOUR_GRAY_ARROW'|null $IconSetType
 */
class ConditionalFormattingIconSet extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     IconSetType?: 'PLUS_MINUS'|'CHECK_X'|'THREE_COLOR_ARROW'|'THREE_GRAY_ARROW'|'CARET_UP_MINUS_DOWN'|'THREE_SHAPE'|'THREE_CIRCLE'|'FLAGS'|'BARS'|'FOUR_COLOR_ARROW'|'FOUR_GRAY_ARROW'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SectionAfterPageBreak $After
 */
class BodySectionRepeatPageBreakConfiguration extends Shape
{
    /**
     * @param array{After?: SectionAfterPageBreak} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SectionAfterPageBreak|null $After
 */
class BodySectionRepeatPageBreakConfiguration extends Shape
{
    /**
     * @param array{After?: SectionAfterPageBreak|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

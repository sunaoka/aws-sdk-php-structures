<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 */
class SectionAfterPageBreak extends Shape
{
    /**
     * @param array{Status?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

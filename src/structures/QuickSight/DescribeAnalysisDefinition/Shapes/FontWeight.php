<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NORMAL'|'BOLD'|null $Name
 */
class FontWeight extends Shape
{
    /**
     * @param array{Name?: 'NORMAL'|'BOLD'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

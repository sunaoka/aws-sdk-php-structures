<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINK' $Icon
 */
class TableFieldCustomIconContent extends Shape
{
    /**
     * @param array{Icon?: 'LINK'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

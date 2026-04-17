<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASC'|'DESC'|'USER_DEFINED_ORDER' $Direction
 */
class SelectableValuesSort extends Shape
{
    /**
     * @param array{Direction: 'ASC'|'DESC'|'USER_DEFINED_ORDER'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

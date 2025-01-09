<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'MANUAL' $QueryExecutionMode
 */
class QueryExecutionOptions extends Shape
{
    /**
     * @param array{QueryExecutionMode?: 'AUTO'|'MANUAL'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

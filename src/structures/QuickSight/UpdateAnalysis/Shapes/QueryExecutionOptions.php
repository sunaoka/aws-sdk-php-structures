<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'MANUAL'|null $QueryExecutionMode
 */
class QueryExecutionOptions extends Shape
{
    /**
     * @param array{QueryExecutionMode?: 'AUTO'|'MANUAL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\CreateMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IS_TRUE'|'IS_FALSE' $Comparison
 */
class MetricFilterBooleanCondition extends Shape
{
    /**
     * @param array{Comparison: 'IS_TRUE'|'IS_FALSE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

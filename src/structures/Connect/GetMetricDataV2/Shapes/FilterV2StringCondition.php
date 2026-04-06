<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_EXISTS'|null $Comparison
 */
class FilterV2StringCondition extends Shape
{
    /**
     * @param array{Comparison?: 'NOT_EXISTS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryConditionItem|null $single
 */
class QueryCondition extends Shape
{
    /**
     * @param array{single?: QueryConditionItem|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

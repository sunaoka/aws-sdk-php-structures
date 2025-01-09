<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringCondition $StringCondition
 * @property NumberCondition $NumberCondition
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     StringCondition?: StringCondition,
     *     NumberCondition?: NumberCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

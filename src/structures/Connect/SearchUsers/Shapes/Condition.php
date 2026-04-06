<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringCondition|null $StringCondition
 * @property NumberCondition|null $NumberCondition
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     StringCondition?: StringCondition|null,
     *     NumberCondition?: NumberCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

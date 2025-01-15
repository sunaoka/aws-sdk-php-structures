<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AND'|'ANY'|null $Logical
 * @property list<Condition>|null $Conditions
 */
class Predicate extends Shape
{
    /**
     * @param array{
     *     Logical?: 'AND'|'ANY'|null,
     *     Conditions?: list<Condition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AND'|'ANY' $Logical
 * @property list<Condition> $Conditions
 */
class Predicate extends Shape
{
    /**
     * @param array{
     *     Logical?: 'AND'|'ANY',
     *     Conditions?: list<Condition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

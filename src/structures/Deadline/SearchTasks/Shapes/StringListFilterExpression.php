<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'EQUAL'|'NOT_EQUAL'|'GREATER_THAN_EQUAL_TO'|'GREATER_THAN'|'LESS_THAN_EQUAL_TO'|'LESS_THAN'|'ANY_EQUALS'|'ALL_NOT_EQUALS' $operator
 * @property list<string> $values
 */
class StringListFilterExpression extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     operator: 'EQUAL'|'NOT_EQUAL'|'GREATER_THAN_EQUAL_TO'|'GREATER_THAN'|'LESS_THAN_EQUAL_TO'|'LESS_THAN'|'ANY_EQUALS'|'ALL_NOT_EQUALS',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

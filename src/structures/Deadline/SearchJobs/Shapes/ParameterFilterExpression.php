<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'EQUAL'|'NOT_EQUAL'|'GREATER_THAN_EQUAL_TO'|'GREATER_THAN'|'LESS_THAN_EQUAL_TO'|'LESS_THAN' $operator
 * @property string $value
 */
class ParameterFilterExpression extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     operator: 'EQUAL'|'NOT_EQUAL'|'GREATER_THAN_EQUAL_TO'|'GREATER_THAN'|'LESS_THAN_EQUAL_TO'|'LESS_THAN',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Braket\SearchQuantumTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $values
 * @property 'LT'|'LTE'|'EQUAL'|'GT'|'GTE'|'BETWEEN' $operator
 */
class SearchQuantumTasksFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     values: list<string>,
     *     operator: 'LT'|'LTE'|'EQUAL'|'GT'|'GTE'|'BETWEEN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

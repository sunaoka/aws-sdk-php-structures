<?php

namespace Sunaoka\Aws\Structures\Braket\SearchQuantumTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'LT'|'LTE'|'EQUAL'|'GT'|'GTE'|'BETWEEN' $operator
 * @property list<string> $values
 */
class SearchQuantumTasksFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     operator: 'LT'|'LTE'|'EQUAL'|'GT'|'GTE'|'BETWEEN',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

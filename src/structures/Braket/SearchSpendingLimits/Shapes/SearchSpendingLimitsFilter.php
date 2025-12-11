<?php

namespace Sunaoka\Aws\Structures\Braket\SearchSpendingLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $values
 * @property 'EQUAL' $operator
 */
class SearchSpendingLimitsFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     values: list<string>,
     *     operator: 'EQUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

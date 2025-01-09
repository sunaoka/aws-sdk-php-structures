<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SimpleCondition> $Conditions
 * @property 'ALL'|'ANY' $Operator
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     Conditions?: list<SimpleCondition>,
     *     Operator?: 'ALL'|'ANY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SimpleCondition>|null $Conditions
 * @property 'ALL'|'ANY'|null $Operator
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     Conditions?: list<SimpleCondition>|null,
     *     Operator?: 'ALL'|'ANY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

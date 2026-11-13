<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Field
 * @property 'EQUALS'|'NOT_EQUALS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN'|'LESS_THAN_OR_EQUAL' $Condition
 * @property list<string>|null $Values
 */
class FetchCriterion extends Shape
{
    /**
     * @param array{
     *     Field: string,
     *     Condition: 'EQUALS'|'NOT_EQUALS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN'|'LESS_THAN_OR_EQUAL',
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

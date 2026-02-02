<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetPerformanceHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property list<string>|null $Values
 * @property list<'EQUALS'|'ABSENT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'GREATER_THAN_OR_EQUAL'|'CASE_SENSITIVE'|'CASE_INSENSITIVE'>|null $MatchOptions
 */
class TagValues extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Values?: list<string>|null,
     *     MatchOptions?: list<'EQUALS'|'ABSENT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'GREATER_THAN_OR_EQUAL'|'CASE_SENSITIVE'|'CASE_INSENSITIVE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

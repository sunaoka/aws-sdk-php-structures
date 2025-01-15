<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'DOES_NOT_EQUAL'|'CONTAINS'|'DOES_NOT_CONTAIN'|'STARTS_WITH'|'ENDS_WITH' $MatchOperator
 * @property list<string>|null $CategoryValues
 * @property 'FILTER_ALL_VALUES'|null $SelectAllOptions
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY'|null $NullOption
 */
class FilterListConfiguration extends Shape
{
    /**
     * @param array{
     *     MatchOperator: 'EQUALS'|'DOES_NOT_EQUAL'|'CONTAINS'|'DOES_NOT_CONTAIN'|'STARTS_WITH'|'ENDS_WITH',
     *     CategoryValues?: list<string>|null,
     *     SelectAllOptions?: 'FILTER_ALL_VALUES'|null,
     *     NullOption?: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

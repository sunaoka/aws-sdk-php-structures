<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'DOES_NOT_EQUAL'|'CONTAINS'|'DOES_NOT_CONTAIN'|'STARTS_WITH'|'ENDS_WITH' $MatchOperator
 * @property string $CategoryValue
 * @property 'FILTER_ALL_VALUES' $SelectAllOptions
 * @property string $ParameterName
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 */
class CustomFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     MatchOperator: 'EQUALS'|'DOES_NOT_EQUAL'|'CONTAINS'|'DOES_NOT_CONTAIN'|'STARTS_WITH'|'ENDS_WITH',
     *     CategoryValue?: string,
     *     SelectAllOptions?: 'FILTER_ALL_VALUES',
     *     ParameterName?: string,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

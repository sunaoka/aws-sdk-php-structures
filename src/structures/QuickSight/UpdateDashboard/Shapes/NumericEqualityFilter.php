<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property double $Value
 * @property 'FILTER_ALL_VALUES' $SelectAllOptions
 * @property 'EQUALS'|'DOES_NOT_EQUAL' $MatchOperator
 * @property AggregationFunction $AggregationFunction
 * @property string $ParameterName
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 * @property DefaultFilterControlConfiguration $DefaultFilterControlConfiguration
 */
class NumericEqualityFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     Value?: double,
     *     SelectAllOptions?: 'FILTER_ALL_VALUES',
     *     MatchOperator: 'EQUALS'|'DOES_NOT_EQUAL',
     *     AggregationFunction?: AggregationFunction,
     *     ParameterName?: string,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY',
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

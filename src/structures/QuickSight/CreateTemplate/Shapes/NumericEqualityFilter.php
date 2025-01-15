<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property double|null $Value
 * @property 'FILTER_ALL_VALUES'|null $SelectAllOptions
 * @property 'EQUALS'|'DOES_NOT_EQUAL' $MatchOperator
 * @property AggregationFunction|null $AggregationFunction
 * @property string|null $ParameterName
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 * @property DefaultFilterControlConfiguration|null $DefaultFilterControlConfiguration
 */
class NumericEqualityFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     Value?: double|null,
     *     SelectAllOptions?: 'FILTER_ALL_VALUES'|null,
     *     MatchOperator: 'EQUALS'|'DOES_NOT_EQUAL',
     *     AggregationFunction?: AggregationFunction|null,
     *     ParameterName?: string|null,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY',
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

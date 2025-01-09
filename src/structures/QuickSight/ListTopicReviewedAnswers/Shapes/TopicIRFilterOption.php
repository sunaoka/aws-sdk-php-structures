<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CATEGORY_FILTER'|'NUMERIC_EQUALITY_FILTER'|'NUMERIC_RANGE_FILTER'|'DATE_RANGE_FILTER'|'RELATIVE_DATE_FILTER'|'TOP_BOTTOM_FILTER'|'EQUALS'|'RANK_LIMIT_FILTER'|'ACCEPT_ALL_FILTER' $FilterType
 * @property 'ENFORCED_VALUE_FILTER'|'CONDITIONAL_VALUE_FILTER'|'NAMED_VALUE_FILTER' $FilterClass
 * @property Identifier $OperandField
 * @property 'CONTAINS'|'EXACT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS_STRING'|'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW' $Function
 * @property TopicConstantValue $Constant
 * @property bool $Inverse
 * @property 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY' $NullFilter
 * @property 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM' $Aggregation
 * @property array<string, string> $AggregationFunctionParameters
 * @property list<AggregationPartitionBy> $AggregationPartitionBy
 * @property TopicConstantValue $Range
 * @property bool $Inclusive
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $TimeGranularity
 * @property TopicConstantValue $LastNextOffset
 * @property list<FilterAggMetrics> $AggMetrics
 * @property TopicConstantValue $TopBottomLimit
 * @property 'ASCENDING'|'DESCENDING' $SortDirection
 * @property Anchor $Anchor
 */
class TopicIRFilterOption extends Shape
{
    /**
     * @param array{
     *     FilterType?: 'CATEGORY_FILTER'|'NUMERIC_EQUALITY_FILTER'|'NUMERIC_RANGE_FILTER'|'DATE_RANGE_FILTER'|'RELATIVE_DATE_FILTER'|'TOP_BOTTOM_FILTER'|'EQUALS'|'RANK_LIMIT_FILTER'|'ACCEPT_ALL_FILTER',
     *     FilterClass?: 'ENFORCED_VALUE_FILTER'|'CONDITIONAL_VALUE_FILTER'|'NAMED_VALUE_FILTER',
     *     OperandField?: Identifier,
     *     Function?: 'CONTAINS'|'EXACT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS_STRING'|'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW',
     *     Constant?: TopicConstantValue,
     *     Inverse?: bool,
     *     NullFilter?: 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY',
     *     Aggregation?: 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM',
     *     AggregationFunctionParameters?: array<string, string>,
     *     AggregationPartitionBy?: list<AggregationPartitionBy>,
     *     Range?: TopicConstantValue,
     *     Inclusive?: bool,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND',
     *     LastNextOffset?: TopicConstantValue,
     *     AggMetrics?: list<FilterAggMetrics>,
     *     TopBottomLimit?: TopicConstantValue,
     *     SortDirection?: 'ASCENDING'|'DESCENDING',
     *     Anchor?: Anchor
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

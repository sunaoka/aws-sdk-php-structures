<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CATEGORY_FILTER'|'NUMERIC_EQUALITY_FILTER'|'NUMERIC_RANGE_FILTER'|'DATE_RANGE_FILTER'|'RELATIVE_DATE_FILTER'|'TOP_BOTTOM_FILTER'|'EQUALS'|'RANK_LIMIT_FILTER'|'ACCEPT_ALL_FILTER'|null $FilterType
 * @property 'ENFORCED_VALUE_FILTER'|'CONDITIONAL_VALUE_FILTER'|'NAMED_VALUE_FILTER'|null $FilterClass
 * @property Identifier|null $OperandField
 * @property 'CONTAINS'|'EXACT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS_STRING'|'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW'|null $Function
 * @property TopicConstantValue|null $Constant
 * @property bool|null $Inverse
 * @property 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null $NullFilter
 * @property 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM'|null $Aggregation
 * @property array<string, string>|null $AggregationFunctionParameters
 * @property list<AggregationPartitionBy>|null $AggregationPartitionBy
 * @property TopicConstantValue|null $Range
 * @property bool|null $Inclusive
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null $TimeGranularity
 * @property TopicConstantValue|null $LastNextOffset
 * @property list<FilterAggMetrics>|null $AggMetrics
 * @property TopicConstantValue|null $TopBottomLimit
 * @property 'ASCENDING'|'DESCENDING'|null $SortDirection
 * @property Anchor|null $Anchor
 */
class TopicIRFilterOption extends Shape
{
    /**
     * @param array{
     *     FilterType?: 'CATEGORY_FILTER'|'NUMERIC_EQUALITY_FILTER'|'NUMERIC_RANGE_FILTER'|'DATE_RANGE_FILTER'|'RELATIVE_DATE_FILTER'|'TOP_BOTTOM_FILTER'|'EQUALS'|'RANK_LIMIT_FILTER'|'ACCEPT_ALL_FILTER'|null,
     *     FilterClass?: 'ENFORCED_VALUE_FILTER'|'CONDITIONAL_VALUE_FILTER'|'NAMED_VALUE_FILTER'|null,
     *     OperandField?: Identifier|null,
     *     Function?: 'CONTAINS'|'EXACT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS_STRING'|'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW'|null,
     *     Constant?: TopicConstantValue|null,
     *     Inverse?: bool|null,
     *     NullFilter?: 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null,
     *     Aggregation?: 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM'|null,
     *     AggregationFunctionParameters?: array<string, string>|null,
     *     AggregationPartitionBy?: list<AggregationPartitionBy>|null,
     *     Range?: TopicConstantValue|null,
     *     Inclusive?: bool|null,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null,
     *     LastNextOffset?: TopicConstantValue|null,
     *     AggMetrics?: list<FilterAggMetrics>|null,
     *     TopBottomLimit?: TopicConstantValue|null,
     *     SortDirection?: 'ASCENDING'|'DESCENDING'|null,
     *     Anchor?: Anchor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property string|null $ColumnFriendlyName
 * @property string|null $ColumnDescription
 * @property list<string>|null $ColumnSynonyms
 * @property 'DIMENSION'|'MEASURE'|null $ColumnDataRole
 * @property 'SUM'|'MAX'|'MIN'|'COUNT'|'DISTINCT_COUNT'|'AVERAGE'|'MEDIAN'|'STDEV'|'STDEVP'|'VAR'|'VARP'|null $Aggregation
 * @property bool|null $IsIncludedInTopic
 * @property bool|null $DisableIndexing
 * @property ComparativeOrder|null $ComparativeOrder
 * @property SemanticType|null $SemanticType
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null $TimeGranularity
 * @property list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>|null $AllowedAggregations
 * @property list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>|null $NotAllowedAggregations
 * @property DefaultFormatting|null $DefaultFormatting
 * @property bool|null $NeverAggregateInFilter
 * @property list<CellValueSynonym>|null $CellValueSynonyms
 * @property bool|null $NonAdditive
 */
class TopicColumn extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     ColumnFriendlyName?: string|null,
     *     ColumnDescription?: string|null,
     *     ColumnSynonyms?: list<string>|null,
     *     ColumnDataRole?: 'DIMENSION'|'MEASURE'|null,
     *     Aggregation?: 'SUM'|'MAX'|'MIN'|'COUNT'|'DISTINCT_COUNT'|'AVERAGE'|'MEDIAN'|'STDEV'|'STDEVP'|'VAR'|'VARP'|null,
     *     IsIncludedInTopic?: bool|null,
     *     DisableIndexing?: bool|null,
     *     ComparativeOrder?: ComparativeOrder|null,
     *     SemanticType?: SemanticType|null,
     *     TimeGranularity?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null,
     *     AllowedAggregations?: list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>|null,
     *     NotAllowedAggregations?: list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>|null,
     *     DefaultFormatting?: DefaultFormatting|null,
     *     NeverAggregateInFilter?: bool|null,
     *     CellValueSynonyms?: list<CellValueSynonym>|null,
     *     NonAdditive?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

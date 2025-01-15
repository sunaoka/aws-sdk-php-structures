<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CalculatedFieldName
 * @property string|null $CalculatedFieldDescription
 * @property string $Expression
 * @property list<string>|null $CalculatedFieldSynonyms
 * @property bool|null $IsIncludedInTopic
 * @property bool|null $DisableIndexing
 * @property 'DIMENSION'|'MEASURE'|null $ColumnDataRole
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null $TimeGranularity
 * @property DefaultFormatting|null $DefaultFormatting
 * @property 'SUM'|'MAX'|'MIN'|'COUNT'|'DISTINCT_COUNT'|'AVERAGE'|'MEDIAN'|'STDEV'|'STDEVP'|'VAR'|'VARP'|null $Aggregation
 * @property ComparativeOrder|null $ComparativeOrder
 * @property SemanticType|null $SemanticType
 * @property list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>|null $AllowedAggregations
 * @property list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>|null $NotAllowedAggregations
 * @property bool|null $NeverAggregateInFilter
 * @property list<CellValueSynonym>|null $CellValueSynonyms
 * @property bool|null $NonAdditive
 */
class TopicCalculatedField extends Shape
{
    /**
     * @param array{
     *     CalculatedFieldName: string,
     *     CalculatedFieldDescription?: string|null,
     *     Expression: string,
     *     CalculatedFieldSynonyms?: list<string>|null,
     *     IsIncludedInTopic?: bool|null,
     *     DisableIndexing?: bool|null,
     *     ColumnDataRole?: 'DIMENSION'|'MEASURE'|null,
     *     TimeGranularity?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null,
     *     DefaultFormatting?: DefaultFormatting|null,
     *     Aggregation?: 'SUM'|'MAX'|'MIN'|'COUNT'|'DISTINCT_COUNT'|'AVERAGE'|'MEDIAN'|'STDEV'|'STDEVP'|'VAR'|'VARP'|null,
     *     ComparativeOrder?: ComparativeOrder|null,
     *     SemanticType?: SemanticType|null,
     *     AllowedAggregations?: list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>|null,
     *     NotAllowedAggregations?: list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>|null,
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

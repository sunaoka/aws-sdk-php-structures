<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CalculatedFieldName
 * @property string $CalculatedFieldDescription
 * @property string $Expression
 * @property list<string> $CalculatedFieldSynonyms
 * @property bool $IsIncludedInTopic
 * @property bool $DisableIndexing
 * @property 'DIMENSION'|'MEASURE' $ColumnDataRole
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR' $TimeGranularity
 * @property DefaultFormatting $DefaultFormatting
 * @property 'SUM'|'MAX'|'MIN'|'COUNT'|'DISTINCT_COUNT'|'AVERAGE'|'MEDIAN'|'STDEV'|'STDEVP'|'VAR'|'VARP' $Aggregation
 * @property ComparativeOrder $ComparativeOrder
 * @property SemanticType $SemanticType
 * @property list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'> $AllowedAggregations
 * @property list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'> $NotAllowedAggregations
 * @property bool $NeverAggregateInFilter
 * @property list<CellValueSynonym> $CellValueSynonyms
 * @property bool $NonAdditive
 */
class TopicCalculatedField extends Shape
{
    /**
     * @param array{
     *     CalculatedFieldName: string,
     *     CalculatedFieldDescription?: string,
     *     Expression: string,
     *     CalculatedFieldSynonyms?: list<string>,
     *     IsIncludedInTopic?: bool,
     *     DisableIndexing?: bool,
     *     ColumnDataRole?: 'DIMENSION'|'MEASURE',
     *     TimeGranularity?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR',
     *     DefaultFormatting?: DefaultFormatting,
     *     Aggregation?: 'SUM'|'MAX'|'MIN'|'COUNT'|'DISTINCT_COUNT'|'AVERAGE'|'MEDIAN'|'STDEV'|'STDEVP'|'VAR'|'VARP',
     *     ComparativeOrder?: ComparativeOrder,
     *     SemanticType?: SemanticType,
     *     AllowedAggregations?: list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>,
     *     NotAllowedAggregations?: list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>,
     *     NeverAggregateInFilter?: bool,
     *     CellValueSynonyms?: list<CellValueSynonym>,
     *     NonAdditive?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

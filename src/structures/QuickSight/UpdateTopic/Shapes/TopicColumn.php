<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property string $ColumnFriendlyName
 * @property string $ColumnDescription
 * @property list<string> $ColumnSynonyms
 * @property 'DIMENSION'|'MEASURE' $ColumnDataRole
 * @property 'SUM'|'MAX'|'MIN'|'COUNT'|'DISTINCT_COUNT'|'AVERAGE'|'MEDIAN'|'STDEV'|'STDEVP'|'VAR'|'VARP' $Aggregation
 * @property bool $IsIncludedInTopic
 * @property bool $DisableIndexing
 * @property ComparativeOrder $ComparativeOrder
 * @property SemanticType $SemanticType
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR' $TimeGranularity
 * @property list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'> $AllowedAggregations
 * @property list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'> $NotAllowedAggregations
 * @property DefaultFormatting $DefaultFormatting
 * @property bool $NeverAggregateInFilter
 * @property list<CellValueSynonym> $CellValueSynonyms
 * @property bool $NonAdditive
 */
class TopicColumn extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     ColumnFriendlyName?: string,
     *     ColumnDescription?: string,
     *     ColumnSynonyms?: list<string>,
     *     ColumnDataRole?: 'DIMENSION'|'MEASURE',
     *     Aggregation?: 'SUM'|'MAX'|'MIN'|'COUNT'|'DISTINCT_COUNT'|'AVERAGE'|'MEDIAN'|'STDEV'|'STDEVP'|'VAR'|'VARP',
     *     IsIncludedInTopic?: bool,
     *     DisableIndexing?: bool,
     *     ComparativeOrder?: ComparativeOrder,
     *     SemanticType?: SemanticType,
     *     TimeGranularity?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR',
     *     AllowedAggregations?: list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>,
     *     NotAllowedAggregations?: list<'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|'MEDIAN'|'SUM'|'AVERAGE'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'>,
     *     DefaultFormatting?: DefaultFormatting,
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

<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StatisticId
 * @property string|null $ProfileId
 * @property RunIdentifier|null $RunIdentifier
 * @property string|null $StatisticName
 * @property double|null $DoubleValue
 * @property 'Dataset'|'Column'|'Multicolumn'|null $EvaluationLevel
 * @property list<string>|null $ColumnsReferenced
 * @property list<string>|null $ReferencedDatasets
 * @property array<string, string>|null $StatisticProperties
 * @property \Aws\Api\DateTimeResult|null $RecordedOn
 * @property TimestampedInclusionAnnotation|null $InclusionAnnotation
 */
class StatisticSummary extends Shape
{
    /**
     * @param array{
     *     StatisticId?: string|null,
     *     ProfileId?: string|null,
     *     RunIdentifier?: RunIdentifier|null,
     *     StatisticName?: string|null,
     *     DoubleValue?: double|null,
     *     EvaluationLevel?: 'Dataset'|'Column'|'Multicolumn'|null,
     *     ColumnsReferenced?: list<string>|null,
     *     ReferencedDatasets?: list<string>|null,
     *     StatisticProperties?: array<string, string>|null,
     *     RecordedOn?: \Aws\Api\DateTimeResult|null,
     *     InclusionAnnotation?: TimestampedInclusionAnnotation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

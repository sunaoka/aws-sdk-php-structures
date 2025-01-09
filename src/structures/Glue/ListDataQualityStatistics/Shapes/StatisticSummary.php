<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StatisticId
 * @property string $ProfileId
 * @property RunIdentifier $RunIdentifier
 * @property string $StatisticName
 * @property double $DoubleValue
 * @property 'Dataset'|'Column'|'Multicolumn' $EvaluationLevel
 * @property list<string> $ColumnsReferenced
 * @property list<string> $ReferencedDatasets
 * @property array<string, string> $StatisticProperties
 * @property \Aws\Api\DateTimeResult $RecordedOn
 * @property TimestampedInclusionAnnotation $InclusionAnnotation
 */
class StatisticSummary extends Shape
{
    /**
     * @param array{
     *     StatisticId?: string,
     *     ProfileId?: string,
     *     RunIdentifier?: RunIdentifier,
     *     StatisticName?: string,
     *     DoubleValue?: double,
     *     EvaluationLevel?: 'Dataset'|'Column'|'Multicolumn',
     *     ColumnsReferenced?: list<string>,
     *     ReferencedDatasets?: list<string>,
     *     StatisticProperties?: array<string, string>,
     *     RecordedOn?: \Aws\Api\DateTimeResult,
     *     InclusionAnnotation?: TimestampedInclusionAnnotation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

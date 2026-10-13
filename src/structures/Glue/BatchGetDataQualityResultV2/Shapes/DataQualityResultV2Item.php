<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResultV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResultId
 * @property DataSource|null $DataSource
 * @property array<string, string>|null $Dimensions
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $ExecutionStartedOn
 * @property \Aws\Api\DateTimeResult|null $ExecutionCompletedOn
 * @property \Aws\Api\DateTimeResult|null $ResultPublishedOn
 * @property double|null $Score
 * @property list<DataQualityRuleResult>|null $RuleResults
 * @property list<DataQualityAnalyzerResult>|null $AnalyzerResults
 * @property list<DataQualityObservation>|null $Observations
 * @property string|null $EvaluationContext
 * @property array<string, string>|null $Descriptors
 * @property DataQualityAggregatedMetrics|null $AggregatedMetrics
 * @property string|null $RulesetName
 */
class DataQualityResultV2Item extends Shape
{
    /**
     * @param array{
     *     ResultId: string,
     *     DataSource?: DataSource|null,
     *     Dimensions?: array<string, string>|null,
     *     Tags?: array<string, string>|null,
     *     ExecutionStartedOn?: \Aws\Api\DateTimeResult|null,
     *     ExecutionCompletedOn?: \Aws\Api\DateTimeResult|null,
     *     ResultPublishedOn?: \Aws\Api\DateTimeResult|null,
     *     Score?: double|null,
     *     RuleResults?: list<DataQualityRuleResult>|null,
     *     AnalyzerResults?: list<DataQualityAnalyzerResult>|null,
     *     Observations?: list<DataQualityObservation>|null,
     *     EvaluationContext?: string|null,
     *     Descriptors?: array<string, string>|null,
     *     AggregatedMetrics?: DataQualityAggregatedMetrics|null,
     *     RulesetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

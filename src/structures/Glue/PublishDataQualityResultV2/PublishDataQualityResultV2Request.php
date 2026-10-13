<?php

namespace Sunaoka\Aws\Structures\Glue\PublishDataQualityResultV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Dimensions
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $ExecutionStartedOn
 * @property \Aws\Api\DateTimeResult|null $ExecutionCompletedOn
 * @property double $Score
 * @property list<Shapes\DataQualityRuleResult> $RuleResults
 * @property list<Shapes\DataQualityAnalyzerResult>|null $AnalyzerResults
 * @property list<Shapes\DataQualityObservation>|null $Observations
 * @property Shapes\DataQualityAggregatedMetrics|null $AggregatedMetrics
 * @property list<Shapes\StatisticSummary>|null $Statistics
 * @property Shapes\DataQualityConfigurationV2|null $RunConfiguration
 * @property string|null $ClientToken
 * @property string $EvaluationContext
 * @property array<string, string>|null $Descriptors
 * @property string|null $RulesetName
 * @property string|null $DataQualitySecurityConfiguration
 * @property Shapes\DataQualityTelemetry|null $Telemetry
 */
class PublishDataQualityResultV2Request extends Request
{
    /**
     * @param array{
     *     Dimensions: array<string, string>,
     *     Tags?: array<string, string>|null,
     *     ExecutionStartedOn?: \Aws\Api\DateTimeResult|null,
     *     ExecutionCompletedOn?: \Aws\Api\DateTimeResult|null,
     *     Score: double,
     *     RuleResults: list<Shapes\DataQualityRuleResult>,
     *     AnalyzerResults?: list<Shapes\DataQualityAnalyzerResult>|null,
     *     Observations?: list<Shapes\DataQualityObservation>|null,
     *     AggregatedMetrics?: Shapes\DataQualityAggregatedMetrics|null,
     *     Statistics?: list<Shapes\StatisticSummary>|null,
     *     RunConfiguration?: Shapes\DataQualityConfigurationV2|null,
     *     ClientToken?: string|null,
     *     EvaluationContext: string,
     *     Descriptors?: array<string, string>|null,
     *     RulesetName?: string|null,
     *     DataQualitySecurityConfiguration?: string|null,
     *     Telemetry?: Shapes\DataQualityTelemetry|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

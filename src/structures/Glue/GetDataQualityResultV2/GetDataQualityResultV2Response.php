<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResultV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResultId
 * @property Shapes\DataSource|null $DataSource
 * @property string|null $ProfileId
 * @property array<string, string>|null $Dimensions
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $ExecutionStartedOn
 * @property \Aws\Api\DateTimeResult|null $ExecutionCompletedOn
 * @property \Aws\Api\DateTimeResult|null $ResultPublishedOn
 * @property double|null $Score
 * @property list<Shapes\DataQualityRuleResult>|null $RuleResults
 * @property list<Shapes\DataQualityAnalyzerResult>|null $AnalyzerResults
 * @property list<Shapes\DataQualityObservation>|null $Observations
 * @property string|null $EvaluationContext
 * @property array<string, string>|null $Descriptors
 * @property Shapes\DataQualityAggregatedMetrics|null $AggregatedMetrics
 * @property string|null $RulesetName
 */
class GetDataQualityResultV2Response extends Response
{
}

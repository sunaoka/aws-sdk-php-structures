<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResultId
 * @property string|null $ProfileId
 * @property double|null $Score
 * @property Shapes\DataSource|null $DataSource
 * @property string|null $RulesetName
 * @property string|null $EvaluationContext
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property string|null $JobName
 * @property string|null $JobRunId
 * @property string|null $RulesetEvaluationRunId
 * @property list<Shapes\DataQualityRuleResult>|null $RuleResults
 * @property list<Shapes\DataQualityAnalyzerResult>|null $AnalyzerResults
 * @property list<Shapes\DataQualityObservation>|null $Observations
 * @property Shapes\DataQualityAggregatedMetrics|null $AggregatedMetrics
 */
class GetDataQualityResultResponse extends Response
{
}

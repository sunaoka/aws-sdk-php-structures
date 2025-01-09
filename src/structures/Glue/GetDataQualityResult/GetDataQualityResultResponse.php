<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResultId
 * @property string $ProfileId
 * @property double $Score
 * @property Shapes\DataSource $DataSource
 * @property string $RulesetName
 * @property string $EvaluationContext
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property string $JobName
 * @property string $JobRunId
 * @property string $RulesetEvaluationRunId
 * @property list<Shapes\DataQualityRuleResult> $RuleResults
 * @property list<Shapes\DataQualityAnalyzerResult> $AnalyzerResults
 * @property list<Shapes\DataQualityObservation> $Observations
 */
class GetDataQualityResultResponse extends Response
{
}

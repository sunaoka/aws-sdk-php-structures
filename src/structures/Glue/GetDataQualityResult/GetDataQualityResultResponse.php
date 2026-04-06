<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResultId
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
 */
class GetDataQualityResultResponse extends Response
{
}

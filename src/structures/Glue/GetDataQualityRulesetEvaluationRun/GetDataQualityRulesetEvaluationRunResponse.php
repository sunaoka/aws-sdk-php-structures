<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRulesetEvaluationRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RunId
 * @property Shapes\DataSource $DataSource
 * @property string $Role
 * @property int $NumberOfWorkers
 * @property int<1, max> $Timeout
 * @property Shapes\DataQualityEvaluationRunAdditionalRunOptions $AdditionalRunOptions
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT' $Status
 * @property string $ErrorString
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property int $ExecutionTime
 * @property list<string> $RulesetNames
 * @property list<string> $ResultIds
 * @property array<string, Shapes\DataSource> $AdditionalDataSources
 */
class GetDataQualityRulesetEvaluationRunResponse extends Response
{
}

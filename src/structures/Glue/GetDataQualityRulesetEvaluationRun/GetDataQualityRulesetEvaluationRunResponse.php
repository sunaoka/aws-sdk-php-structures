<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRulesetEvaluationRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RunId
 * @property Shapes\DataSource|null $DataSource
 * @property string|null $Role
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property Shapes\DataQualityEvaluationRunAdditionalRunOptions|null $AdditionalRunOptions
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $Status
 * @property string|null $ErrorString
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property int|null $ExecutionTime
 * @property list<string>|null $RulesetNames
 * @property list<string>|null $ResultIds
 * @property array<string, Shapes\DataSource>|null $AdditionalDataSources
 */
class GetDataQualityRulesetEvaluationRunResponse extends Response
{
}

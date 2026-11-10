<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityEvaluationConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property 'ON_DEMAND'|'EVALUATION_CONFIG'|null $EvaluationRunMode
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property 'CATALOG'|'DATABASE'|'TABLE'|null $Level
 * @property Shapes\DataQualityEvaluationConfigDataSource|null $DataSource
 * @property string|null $RulesetName
 * @property 'SIMPLE'|'ADVANCED'|null $ManagedRulesetName
 * @property list<'ONCE'|'SCHEDULE'|'METADATA_CHANGE'>|null $Triggers
 * @property string|null $ScheduleExpression
 * @property \Aws\Api\DateTimeResult|null $StartAt
 * @property \Aws\Api\DateTimeResult|null $EndAt
 * @property bool|null $PauseRuns
 * @property string|null $Role
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property Shapes\DataQualityEvaluationConfigAdditionalRunOptions|null $AdditionalRunOptions
 * @property array<string, Shapes\DataSource>|null $AdditionalDataSources
 */
class GetDataQualityEvaluationConfigResponse extends Response
{
}

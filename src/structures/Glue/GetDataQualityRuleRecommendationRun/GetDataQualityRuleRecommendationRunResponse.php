<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleRecommendationRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RunId
 * @property Shapes\DataSource|null $DataSource
 * @property string|null $Role
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $Status
 * @property string|null $ErrorString
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property int|null $ExecutionTime
 * @property string|null $RecommendedRuleset
 * @property string|null $CreatedRulesetName
 * @property string|null $DataQualitySecurityConfiguration
 */
class GetDataQualityRuleRecommendationRunResponse extends Response
{
}

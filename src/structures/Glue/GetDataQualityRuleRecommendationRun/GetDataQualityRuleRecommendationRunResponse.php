<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleRecommendationRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RunId
 * @property Shapes\DataSource $DataSource
 * @property string $Role
 * @property int $NumberOfWorkers
 * @property int $Timeout
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT' $Status
 * @property string $ErrorString
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property int $ExecutionTime
 * @property string $RecommendedRuleset
 * @property string $CreatedRulesetName
 * @property string $DataQualitySecurityConfiguration
 */
class GetDataQualityRuleRecommendationRunResponse extends Response
{
}

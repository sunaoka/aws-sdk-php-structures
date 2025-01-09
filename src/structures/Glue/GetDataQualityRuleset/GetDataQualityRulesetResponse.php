<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Ruleset
 * @property Shapes\DataQualityTargetTable $TargetTable
 * @property \Aws\Api\DateTimeResult $CreatedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property string $RecommendationRunId
 * @property string $DataQualitySecurityConfiguration
 */
class GetDataQualityRulesetResponse extends Response
{
}

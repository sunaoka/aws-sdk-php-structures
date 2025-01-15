<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Ruleset
 * @property Shapes\DataQualityTargetTable|null $TargetTable
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property string|null $RecommendationRunId
 * @property string|null $DataQualitySecurityConfiguration
 */
class GetDataQualityRulesetResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RuleName
 * @property string|null $RuleArn
 * @property int|null $CreatedTimeStamp
 * @property int|null $LastUpdateTimeStamp
 * @property Shapes\TelemetryRule|null $TelemetryRule
 */
class GetTelemetryRuleResponse extends Response
{
}

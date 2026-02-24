<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetAlarmMuteRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $AlarmMuteRuleArn
 * @property string|null $Description
 * @property Shapes\Rule|null $Rule
 * @property Shapes\MuteTargets|null $MuteTargets
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $ExpireDate
 * @property 'SCHEDULED'|'ACTIVE'|'EXPIRED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property string|null $MuteType
 */
class GetAlarmMuteRuleResponse extends Response
{
}

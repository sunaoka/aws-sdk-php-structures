<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListAlarmMuteRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlarmMuteRuleArn
 * @property \Aws\Api\DateTimeResult|null $ExpireDate
 * @property 'SCHEDULED'|'ACTIVE'|'EXPIRED'|null $Status
 * @property string|null $MuteType
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class AlarmMuteRuleSummary extends Shape
{
    /**
     * @param array{
     *     AlarmMuteRuleArn?: string|null,
     *     ExpireDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'SCHEDULED'|'ACTIVE'|'EXPIRED'|null,
     *     MuteType?: string|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

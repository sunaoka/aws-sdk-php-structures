<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetAlarmMuteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlarmMuteRuleName
 */
class GetAlarmMuteRuleRequest extends Request
{
    /**
     * @param array{AlarmMuteRuleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

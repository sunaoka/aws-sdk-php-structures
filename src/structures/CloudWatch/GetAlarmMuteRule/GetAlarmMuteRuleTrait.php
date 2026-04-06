<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetAlarmMuteRule;

trait GetAlarmMuteRuleTrait
{
    /**
     * @param GetAlarmMuteRuleRequest $args
     * @return GetAlarmMuteRuleResponse
     */
    public function getAlarmMuteRule(GetAlarmMuteRuleRequest $args)
    {
        $result = parent::getAlarmMuteRule($args->toArray());
        return new GetAlarmMuteRuleResponse($result->toArray());
    }
}

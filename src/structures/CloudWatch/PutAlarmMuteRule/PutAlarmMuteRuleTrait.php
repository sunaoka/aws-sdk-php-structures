<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutAlarmMuteRule;

trait PutAlarmMuteRuleTrait
{
    /**
     * @param PutAlarmMuteRuleRequest $args
     * @return void
     */
    public function putAlarmMuteRule(PutAlarmMuteRuleRequest $args)
    {
        parent::putAlarmMuteRule($args->toArray());
    }
}

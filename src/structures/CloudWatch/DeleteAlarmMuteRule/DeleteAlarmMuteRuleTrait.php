<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteAlarmMuteRule;

trait DeleteAlarmMuteRuleTrait
{
    /**
     * @param DeleteAlarmMuteRuleRequest $args
     * @return void
     */
    public function deleteAlarmMuteRule(DeleteAlarmMuteRuleRequest $args)
    {
        parent::deleteAlarmMuteRule($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListAlarmMuteRules;

trait ListAlarmMuteRulesTrait
{
    /**
     * @param ListAlarmMuteRulesRequest $args
     * @return ListAlarmMuteRulesResponse
     */
    public function listAlarmMuteRules(ListAlarmMuteRulesRequest $args)
    {
        $result = parent::listAlarmMuteRules($args->toArray());
        return new ListAlarmMuteRulesResponse($result->toArray());
    }
}

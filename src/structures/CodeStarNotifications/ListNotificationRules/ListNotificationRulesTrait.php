<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListNotificationRules;

trait ListNotificationRulesTrait
{
    /**
     * @param ListNotificationRulesRequest $args
     * @return ListNotificationRulesResponse
     */
    public function listNotificationRules(ListNotificationRulesRequest $args)
    {
        $result = parent::listNotificationRules($args->toArray());
        return new ListNotificationRulesResponse($result->toArray());
    }
}

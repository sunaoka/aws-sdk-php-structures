<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\UpdateNotificationRule;

trait UpdateNotificationRuleTrait
{
    /**
     * @param UpdateNotificationRuleRequest $args
     * @return UpdateNotificationRuleResponse
     */
    public function updateNotificationRule(UpdateNotificationRuleRequest $args)
    {
        $result = parent::updateNotificationRule($args->toArray());
        return new UpdateNotificationRuleResponse($result->toArray());
    }
}

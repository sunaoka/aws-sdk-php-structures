<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DeleteNotificationRule;

trait DeleteNotificationRuleTrait
{
    /**
     * @param DeleteNotificationRuleRequest $args
     * @return DeleteNotificationRuleResponse
     */
    public function deleteNotificationRule(DeleteNotificationRuleRequest $args)
    {
        $result = parent::deleteNotificationRule($args->toArray());
        return new DeleteNotificationRuleResponse($result->toArray());
    }
}

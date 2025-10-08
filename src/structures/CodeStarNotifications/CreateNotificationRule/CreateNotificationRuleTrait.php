<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\CreateNotificationRule;

trait CreateNotificationRuleTrait
{
    /**
     * @param CreateNotificationRuleRequest $args
     * @return CreateNotificationRuleResponse
     */
    public function createNotificationRule(CreateNotificationRuleRequest $args)
    {
        $result = parent::createNotificationRule($args->toArray());
        return new CreateNotificationRuleResponse($result->toArray());
    }
}

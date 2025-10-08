<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DescribeNotificationRule;

trait DescribeNotificationRuleTrait
{
    /**
     * @param DescribeNotificationRuleRequest $args
     * @return DescribeNotificationRuleResponse
     */
    public function describeNotificationRule(DescribeNotificationRuleRequest $args)
    {
        $result = parent::describeNotificationRule($args->toArray());
        return new DescribeNotificationRuleResponse($result->toArray());
    }
}

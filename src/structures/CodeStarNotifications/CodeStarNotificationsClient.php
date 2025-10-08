<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications;

class CodeStarNotificationsClient extends \Aws\CodeStarNotifications\CodeStarNotificationsClient
{
    use CreateNotificationRule\CreateNotificationRuleTrait;
    use DeleteNotificationRule\DeleteNotificationRuleTrait;
    use DeleteTarget\DeleteTargetTrait;
    use DescribeNotificationRule\DescribeNotificationRuleTrait;
    use ListEventTypes\ListEventTypesTrait;
    use ListNotificationRules\ListNotificationRulesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTargets\ListTargetsTrait;
    use Subscribe\SubscribeTrait;
    use TagResource\TagResourceTrait;
    use Unsubscribe\UnsubscribeTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateNotificationRule\UpdateNotificationRuleTrait;
}

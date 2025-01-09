<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DescribeNotificationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DescribeNotificationRuleRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

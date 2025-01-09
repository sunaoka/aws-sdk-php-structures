<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DeleteNotificationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteNotificationRuleRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

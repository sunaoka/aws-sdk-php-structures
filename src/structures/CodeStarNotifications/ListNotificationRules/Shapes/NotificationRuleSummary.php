<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListNotificationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 */
class NotificationRuleSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

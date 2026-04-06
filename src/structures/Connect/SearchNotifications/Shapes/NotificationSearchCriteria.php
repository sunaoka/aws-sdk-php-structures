<?php

namespace Sunaoka\Aws\Structures\Connect\SearchNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NotificationSearchCriteria>|null $OrConditions
 * @property list<NotificationSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class NotificationSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<NotificationSearchCriteria>|null,
     *     AndConditions?: list<NotificationSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

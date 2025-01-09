<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $eventTypeCodes
 * @property list<string> $services
 * @property list<'issue'|'accountNotification'|'scheduledChange'|'investigation'> $eventTypeCategories
 */
class EventTypeFilter extends Shape
{
    /**
     * @param array{
     *     eventTypeCodes?: list<string>,
     *     services?: list<string>,
     *     eventTypeCategories?: list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

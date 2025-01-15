<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $eventTypeCodes
 * @property list<string>|null $services
 * @property list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>|null $eventTypeCategories
 */
class EventTypeFilter extends Shape
{
    /**
     * @param array{
     *     eventTypeCodes?: list<string>|null,
     *     services?: list<string>|null,
     *     eventTypeCategories?: list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

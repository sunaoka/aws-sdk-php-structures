<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $eventTypeCodes
 * @property list<string>|null $services
 * @property list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>|null $eventTypeCategories
 * @property list<'ACTION_REQUIRED'|'ACTION_MAY_BE_REQUIRED'|'INFORMATIONAL'>|null $actionabilities
 * @property list<'OPERATIONS'|'SECURITY'|'BILLING'>|null $personas
 */
class EventTypeFilter extends Shape
{
    /**
     * @param array{
     *     eventTypeCodes?: list<string>|null,
     *     services?: list<string>|null,
     *     eventTypeCategories?: list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>|null,
     *     actionabilities?: list<'ACTION_REQUIRED'|'ACTION_MAY_BE_REQUIRED'|'INFORMATIONAL'>|null,
     *     personas?: list<'OPERATIONS'|'SECURITY'|'BILLING'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

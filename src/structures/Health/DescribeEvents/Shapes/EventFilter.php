<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ACTION_REQUIRED'|'ACTION_MAY_BE_REQUIRED'|'INFORMATIONAL'>|null $actionabilities
 * @property list<string>|null $eventArns
 * @property list<string>|null $eventTypeCodes
 * @property list<string>|null $services
 * @property list<string>|null $regions
 * @property list<string>|null $availabilityZones
 * @property list<DateTimeRange>|null $startTimes
 * @property list<DateTimeRange>|null $endTimes
 * @property list<DateTimeRange>|null $lastUpdatedTimes
 * @property list<string>|null $entityArns
 * @property list<string>|null $entityValues
 * @property list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>|null $eventTypeCategories
 * @property list<array<string, string>>|null $tags
 * @property list<'open'|'closed'|'upcoming'>|null $eventStatusCodes
 * @property list<'OPERATIONS'|'SECURITY'|'BILLING'>|null $personas
 */
class EventFilter extends Shape
{
    /**
     * @param array{
     *     actionabilities?: list<'ACTION_REQUIRED'|'ACTION_MAY_BE_REQUIRED'|'INFORMATIONAL'>|null,
     *     eventArns?: list<string>|null,
     *     eventTypeCodes?: list<string>|null,
     *     services?: list<string>|null,
     *     regions?: list<string>|null,
     *     availabilityZones?: list<string>|null,
     *     startTimes?: list<DateTimeRange>|null,
     *     endTimes?: list<DateTimeRange>|null,
     *     lastUpdatedTimes?: list<DateTimeRange>|null,
     *     entityArns?: list<string>|null,
     *     entityValues?: list<string>|null,
     *     eventTypeCategories?: list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>|null,
     *     tags?: list<array<string, string>>|null,
     *     eventStatusCodes?: list<'open'|'closed'|'upcoming'>|null,
     *     personas?: list<'OPERATIONS'|'SECURITY'|'BILLING'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

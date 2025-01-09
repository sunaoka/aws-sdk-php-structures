<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $eventArns
 * @property list<string> $eventTypeCodes
 * @property list<string> $services
 * @property list<string> $regions
 * @property list<string> $availabilityZones
 * @property list<DateTimeRange> $startTimes
 * @property list<DateTimeRange> $endTimes
 * @property list<DateTimeRange> $lastUpdatedTimes
 * @property list<string> $entityArns
 * @property list<string> $entityValues
 * @property list<'issue'|'accountNotification'|'scheduledChange'|'investigation'> $eventTypeCategories
 * @property list<array<string, string>> $tags
 * @property list<'open'|'closed'|'upcoming'> $eventStatusCodes
 */
class EventFilter extends Shape
{
    /**
     * @param array{
     *     eventArns?: list<string>,
     *     eventTypeCodes?: list<string>,
     *     services?: list<string>,
     *     regions?: list<string>,
     *     availabilityZones?: list<string>,
     *     startTimes?: list<DateTimeRange>,
     *     endTimes?: list<DateTimeRange>,
     *     lastUpdatedTimes?: list<DateTimeRange>,
     *     entityArns?: list<string>,
     *     entityValues?: list<string>,
     *     eventTypeCategories?: list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>,
     *     tags?: list<array<string, string>>,
     *     eventStatusCodes?: list<'open'|'closed'|'upcoming'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

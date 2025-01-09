<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $eventTypeCodes
 * @property list<string> $awsAccountIds
 * @property list<string> $services
 * @property list<string> $regions
 * @property DateTimeRange $startTime
 * @property DateTimeRange $endTime
 * @property DateTimeRange $lastUpdatedTime
 * @property list<string> $entityArns
 * @property list<string> $entityValues
 * @property list<'issue'|'accountNotification'|'scheduledChange'|'investigation'> $eventTypeCategories
 * @property list<'open'|'closed'|'upcoming'> $eventStatusCodes
 */
class OrganizationEventFilter extends Shape
{
    /**
     * @param array{
     *     eventTypeCodes?: list<string>,
     *     awsAccountIds?: list<string>,
     *     services?: list<string>,
     *     regions?: list<string>,
     *     startTime?: DateTimeRange,
     *     endTime?: DateTimeRange,
     *     lastUpdatedTime?: DateTimeRange,
     *     entityArns?: list<string>,
     *     entityValues?: list<string>,
     *     eventTypeCategories?: list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>,
     *     eventStatusCodes?: list<'open'|'closed'|'upcoming'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

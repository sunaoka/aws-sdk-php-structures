<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $service
 * @property string $eventTypeCode
 * @property 'issue'|'accountNotification'|'scheduledChange'|'investigation' $eventTypeCategory
 * @property 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE' $eventScopeCode
 * @property string $region
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property 'open'|'closed'|'upcoming' $statusCode
 */
class OrganizationEvent extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     service?: string,
     *     eventTypeCode?: string,
     *     eventTypeCategory?: 'issue'|'accountNotification'|'scheduledChange'|'investigation',
     *     eventScopeCode?: 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE',
     *     region?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     statusCode?: 'open'|'closed'|'upcoming'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $service
 * @property string $eventTypeCode
 * @property 'issue'|'accountNotification'|'scheduledChange'|'investigation' $eventTypeCategory
 * @property string $region
 * @property string $availabilityZone
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property 'open'|'closed'|'upcoming' $statusCode
 * @property 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE' $eventScopeCode
 */
class Event extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     service?: string,
     *     eventTypeCode?: string,
     *     eventTypeCategory?: 'issue'|'accountNotification'|'scheduledChange'|'investigation',
     *     region?: string,
     *     availabilityZone?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     statusCode?: 'open'|'closed'|'upcoming',
     *     eventScopeCode?: 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $service
 * @property string|null $eventTypeCode
 * @property 'issue'|'accountNotification'|'scheduledChange'|'investigation'|null $eventTypeCategory
 * @property string|null $region
 * @property string|null $availabilityZone
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property 'open'|'closed'|'upcoming'|null $statusCode
 * @property 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE'|null $eventScopeCode
 */
class Event extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     service?: string|null,
     *     eventTypeCode?: string|null,
     *     eventTypeCategory?: 'issue'|'accountNotification'|'scheduledChange'|'investigation'|null,
     *     region?: string|null,
     *     availabilityZone?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     statusCode?: 'open'|'closed'|'upcoming'|null,
     *     eventScopeCode?: 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

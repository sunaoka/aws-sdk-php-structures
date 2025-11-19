<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $service
 * @property string|null $eventTypeCode
 * @property 'issue'|'accountNotification'|'scheduledChange'|'investigation'|null $eventTypeCategory
 * @property 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE'|null $eventScopeCode
 * @property string|null $region
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property 'open'|'closed'|'upcoming'|null $statusCode
 * @property 'ACTION_REQUIRED'|'ACTION_MAY_BE_REQUIRED'|'INFORMATIONAL'|null $actionability
 * @property list<'OPERATIONS'|'SECURITY'|'BILLING'>|null $personas
 */
class OrganizationEvent extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     service?: string|null,
     *     eventTypeCode?: string|null,
     *     eventTypeCategory?: 'issue'|'accountNotification'|'scheduledChange'|'investigation'|null,
     *     eventScopeCode?: 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE'|null,
     *     region?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     statusCode?: 'open'|'closed'|'upcoming'|null,
     *     actionability?: 'ACTION_REQUIRED'|'ACTION_MAY_BE_REQUIRED'|'INFORMATIONAL'|null,
     *     personas?: list<'OPERATIONS'|'SECURITY'|'BILLING'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

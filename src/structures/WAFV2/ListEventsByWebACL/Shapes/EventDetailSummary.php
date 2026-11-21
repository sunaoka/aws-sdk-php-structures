<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEventsByWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property 'EVENT_STARTED'|'EVENT_IN_PROGRESS'|'EVENT_COMPLETED'|'EVENT_ENDED'|null $EventStatus
 * @property 'API_SECURITY'|null $EventCategory
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $ResourceArn
 * @property string|null $WebAclArn
 * @property ApiSecurityEventDetail|null $ApiSecurityEventDetail
 */
class EventDetailSummary extends Shape
{
    /**
     * @param array{
     *     EventId: string,
     *     EventStatus?: 'EVENT_STARTED'|'EVENT_IN_PROGRESS'|'EVENT_COMPLETED'|'EVENT_ENDED'|null,
     *     EventCategory?: 'API_SECURITY'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceArn?: string|null,
     *     WebAclArn?: string|null,
     *     ApiSecurityEventDetail?: ApiSecurityEventDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListManagedApiEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property 'WAF_API_SECURITY'|null $eventType
 * @property 'EVENT_STARTED'|'EVENT_IN_PROGRESS'|'EVENT_ENDED'|null $status
 * @property WafApiSecurityEventDetail|null $wafApiSecurityEventDetail
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ManagedApiEventSummary extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     eventType?: 'WAF_API_SECURITY'|null,
     *     status?: 'EVENT_STARTED'|'EVENT_IN_PROGRESS'|'EVENT_ENDED'|null,
     *     wafApiSecurityEventDetail?: WafApiSecurityEventDetail|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

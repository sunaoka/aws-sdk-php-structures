<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $systemArn
 * @property list<'SYSTEM_CREATED'|'SYSTEM_DELETED'|'SYSTEM_USER_JOURNEY_CREATED'|'SYSTEM_USER_JOURNEY_UPDATED'|'SYSTEM_USER_JOURNEY_DELETED'|'SYSTEM_SERVICE_ASSOCIATED'|'SYSTEM_SERVICE_DISASSOCIATED'|'SYSTEM_POLICY_ASSOCIATED'|'SYSTEM_POLICY_DISASSOCIATED'>|null $eventTypes
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListSystemEventsRequest extends Request
{
    /**
     * @param array{
     *     systemArn: string,
     *     eventTypes?: list<'SYSTEM_CREATED'|'SYSTEM_DELETED'|'SYSTEM_USER_JOURNEY_CREATED'|'SYSTEM_USER_JOURNEY_UPDATED'|'SYSTEM_USER_JOURNEY_DELETED'|'SYSTEM_SERVICE_ASSOCIATED'|'SYSTEM_SERVICE_DISASSOCIATED'|'SYSTEM_POLICY_ASSOCIATED'|'SYSTEM_POLICY_DISASSOCIATED'>|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

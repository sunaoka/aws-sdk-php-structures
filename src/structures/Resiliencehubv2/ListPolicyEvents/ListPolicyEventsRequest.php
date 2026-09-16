<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListPolicyEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property list<'POLICY_ATTACHED_TO_SERVICE'|'POLICY_DETACHED_FROM_SERVICE'|'POLICY_SHARING_REVOKED'|'POLICY_DELETED'>|null $eventTypes
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListPolicyEventsRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     eventTypes?: list<'POLICY_ATTACHED_TO_SERVICE'|'POLICY_DETACHED_FROM_SERVICE'|'POLICY_SHARING_REVOKED'|'POLICY_DELETED'>|null,
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

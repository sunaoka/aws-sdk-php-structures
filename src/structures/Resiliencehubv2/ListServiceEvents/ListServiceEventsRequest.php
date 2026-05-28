<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property list<'SERVICE_CREATED'|'SERVICE_DELETED'|'SERVICE_SYSTEM_ASSOCIATED'|'SERVICE_SYSTEM_DISASSOCIATED'|'SERVICE_RESOURCES_ASSOCIATED'|'SERVICE_RESOURCES_DISASSOCIATED'|'SERVICE_WORKFLOW_UPDATED'|'SERVICE_INPUT_SOURCES_UPDATED'|'SERVICE_POLICY_ASSOCIATED'|'SERVICE_POLICY_DISASSOCIATED'|'SERVICE_FUNCTION_CREATED'|'SERVICE_FUNCTION_UPDATED'|'SERVICE_FUNCTION_DELETED'|'SERVICE_FUNCTION_RESOURCES_ADDED'|'SERVICE_FUNCTION_RESOURCES_REMOVED'|'SERVICE_ACHIEVABILITY_UPDATED'|'ASSERTION_CREATED'|'ASSERTION_UPDATED'|'ASSERTION_DELETED'>|null $eventTypes
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListServiceEventsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     eventTypes?: list<'SERVICE_CREATED'|'SERVICE_DELETED'|'SERVICE_SYSTEM_ASSOCIATED'|'SERVICE_SYSTEM_DISASSOCIATED'|'SERVICE_RESOURCES_ASSOCIATED'|'SERVICE_RESOURCES_DISASSOCIATED'|'SERVICE_WORKFLOW_UPDATED'|'SERVICE_INPUT_SOURCES_UPDATED'|'SERVICE_POLICY_ASSOCIATED'|'SERVICE_POLICY_DISASSOCIATED'|'SERVICE_FUNCTION_CREATED'|'SERVICE_FUNCTION_UPDATED'|'SERVICE_FUNCTION_DELETED'|'SERVICE_FUNCTION_RESOURCES_ADDED'|'SERVICE_FUNCTION_RESOURCES_REMOVED'|'SERVICE_ACHIEVABILITY_UPDATED'|'ASSERTION_CREATED'|'ASSERTION_UPDATED'|'ASSERTION_DELETED'>|null,
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

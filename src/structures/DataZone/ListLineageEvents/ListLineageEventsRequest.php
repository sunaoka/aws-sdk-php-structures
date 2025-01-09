<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED' $processingStatus
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property \Aws\Api\DateTimeResult $timestampAfter
 * @property \Aws\Api\DateTimeResult $timestampBefore
 */
class ListLineageEventsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     processingStatus?: 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED',
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     timestampAfter?: \Aws\Api\DateTimeResult,
     *     timestampBefore?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null $processingStatus
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property \Aws\Api\DateTimeResult|null $timestampAfter
 * @property \Aws\Api\DateTimeResult|null $timestampBefore
 */
class ListLineageEventsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     processingStatus?: 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     timestampAfter?: \Aws\Api\DateTimeResult|null,
     *     timestampBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
